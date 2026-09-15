<?php
/**
 * api/save_score.php
 * รับข้อมูลคะแนนของผู้เล่น (POST JSON) แล้วบันทึก/อัปเดตลงไฟล์ data/scores.json
 *
 * โครงสร้าง JSON ที่ต้องส่งมา:
 * { "name": "...", "grade": "...", "room": "...", "level": 1, "moves": 10, "score": 1000 }
 *
 * กติกาการบันทึก:
 * - ผู้เล่น 1 คน (ระบุด้วย name+grade+room) จะมีแถวเดียวในลีดเดอร์บอร์ด
 * - ถ้าคะแนนใหม่สูงกว่าคะแนนเดิมที่เคยบันทึกไว้ ระบบจะอัปเดตแถวนั้นให้
 * - ถ้าคะแนนใหม่ต่ำกว่าหรือเท่าเดิม จะไม่มีการเปลี่ยนแปลงข้อมูล
 */

header('Content-Type: application/json; charset=utf-8');

// อนุญาตเฉพาะ POST เท่านั้น
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed. ใช้ POST เท่านั้น']);
    exit;
}

$dataDir  = __DIR__ . '/../data';
$dataFile = $dataDir . '/scores.json';

// สร้างโฟลเดอร์/ไฟล์เริ่มต้นถ้ายังไม่มี (กันเคสติดตั้งใหม่)
if (!is_dir($dataDir)) {
    mkdir($dataDir, 0775, true);
}
if (!file_exists($dataFile)) {
    file_put_contents($dataFile, '[]');
}

// อ่านข้อมูลที่ส่งเข้ามา
$raw   = file_get_contents('php://input');
$input = json_decode($raw, true);

if (!is_array($input)) {
    http_response_code(400);
    echo json_encode(['error' => 'รูปแบบข้อมูล JSON ไม่ถูกต้อง']);
    exit;
}

// ดึงและทำความสะอาดข้อมูลแต่ละฟิลด์
$name  = trim((string)($input['name']  ?? ''));
$grade = trim((string)($input['grade'] ?? ''));
$room  = trim((string)($input['room']  ?? ''));
$level = (int)($input['level'] ?? 1);
$moves = (int)($input['moves'] ?? 0);
$score = (int)($input['score'] ?? 0);

if ($name === '' || $grade === '' || $room === '') {
    http_response_code(400);
    echo json_encode(['error' => 'กรุณาระบุ name, grade และ room ให้ครบถ้วน']);
    exit;
}

// จำกัดความยาวข้อความกันข้อมูลขยะ/โจมตี (ใช้ mb_substr ถ้ามี extension mbstring, ถ้าไม่มีให้ตัดแบบไบต์ปกติ)
function safe_substr(string $str, int $maxLen): string
{
    return function_exists('mb_substr') ? mb_substr($str, 0, $maxLen) : substr($str, 0, $maxLen * 4);
}
$name  = safe_substr($name, 100);
$grade = safe_substr($grade, 50);
$room  = safe_substr($room, 50);
if ($level < 1) $level = 1;
if ($moves < 0) $moves = 0;
if ($score < 0) $score = 0;

// เปิดไฟล์แบบ read+write พร้อม lock กันข้อมูลชนกันเวลามีคนเล่นพร้อมกันหลายคน
$fp = fopen($dataFile, 'c+');
if ($fp === false) {
    http_response_code(500);
    echo json_encode(['error' => 'ไม่สามารถเปิดไฟล์ข้อมูลได้ ตรวจสอบสิทธิ์การเขียนไฟล์ในโฟลเดอร์ data/']);
    exit;
}

if (!flock($fp, LOCK_EX)) {
    fclose($fp);
    http_response_code(500);
    echo json_encode(['error' => 'ไม่สามารถล็อกไฟล์ข้อมูลได้']);
    exit;
}

$size    = filesize($dataFile);
$content = $size > 0 ? fread($fp, $size) : '';
$scores  = json_decode($content, true);
if (!is_array($scores)) {
    $scores = [];
}

$found = false;
foreach ($scores as &$entry) {
    if (
        isset($entry['name'], $entry['grade'], $entry['room']) &&
        $entry['name'] === $name &&
        $entry['grade'] === $grade &&
        $entry['room'] === $room
    ) {
        $found = true;
        // อัปเดตเฉพาะเมื่อคะแนนใหม่สูงกว่าคะแนนเดิม
        if ($score > (int)$entry['score']) {
            $entry['level'] = $level;
            $entry['moves'] = $moves;
            $entry['score'] = $score;
            $entry['date']  = date('d/m/Y H:i');
        }
        break;
    }
}
unset($entry);

if (!$found) {
    $scores[] = [
        'name'  => $name,
        'grade' => $grade,
        'room'  => $room,
        'level' => $level,
        'moves' => $moves,
        'score' => $score,
        'date'  => date('d/m/Y H:i'),
    ];
}

// เขียนข้อมูลกลับลงไฟล์
ftruncate($fp, 0);
rewind($fp);
fwrite($fp, json_encode($scores, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
fflush($fp);
flock($fp, LOCK_UN);
fclose($fp);

echo json_encode(['success' => true]);
