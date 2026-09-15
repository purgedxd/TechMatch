<?php
/**
 * api/get_scores.php
 * ส่งคืนข้อมูลลีดเดอร์บอร์ดทั้งหมดในรูปแบบ JSON array
 * เรียงลำดับจากคะแนนสูงสุด -> ต่ำสุด
 */

header('Content-Type: application/json; charset=utf-8');
// กันแคชของเบราว์เซอร์ เพื่อให้ข้อมูลอัปเดตแบบเรียลไทม์เสมอ
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');

$dataDir  = __DIR__ . '/../data';
$dataFile = $dataDir . '/scores.json';

if (!is_dir($dataDir)) {
    mkdir($dataDir, 0775, true);
}

if (!file_exists($dataFile)) {
    echo json_encode([]);
    exit;
}

$scores = [];
$fp = fopen($dataFile, 'r');
if ($fp !== false) {
    if (flock($fp, LOCK_SH)) {
        $size    = filesize($dataFile);
        $content = $size > 0 ? fread($fp, $size) : '';
        $decoded = json_decode($content, true);
        if (is_array($decoded)) {
            $scores = $decoded;
        }
        flock($fp, LOCK_UN);
    }
    fclose($fp);
}

// เรียงลำดับตามคะแนนมาก -> น้อย
usort($scores, function ($a, $b) {
    return ($b['score'] ?? 0) <=> ($a['score'] ?? 0);
});

echo json_encode(array_values($scores), JSON_UNESCAPED_UNICODE);
