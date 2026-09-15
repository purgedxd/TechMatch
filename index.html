<?php
// index.php - เกมจับคู่การ์ดระบบประมวลผลการเรียนรู้ (Tech Match - Endless Level Edition)
// พัฒนาด้วย HTML5, Tailwind CSS v3 และ Vanilla JavaScript
// รองรับการรันบน XAMPP ได้ทันทีโดยไม่ต้องติดตั้งระบบเพิ่มเติม
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🧠 TECH MATCH - เกมจับคู่การ์ดคอมพิวเตอร์ (โหมดไม่มีที่สิ้นสุด)</title>
    <!-- นำเข้า Tailwind CSS ผ่าน CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Sarabun', sans-serif;
        }
        /* คลาสสิกสำหรับการทำ Card Flip Effect แบบ 3D */
        .perspective-1000 {
            perspective: 1000px;
        }
        .preserve-3d {
            transform-style: preserve-3d;
        }
        .backface-hidden {
            backface-visibility: hidden;
        }
        .rotate-y-180 {
            transform: rotateY(180deg);
        }
        @keyframes pulseWarn {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.4; }
        }
        .timer-warn {
            animation: pulseWarn 1s infinite;
        }
    </style>
</head>
<body class="bg-[#0f172a] text-slate-100 min-h-screen flex flex-col selection:bg-cyan-500 selection:text-slate-950">

    <!-- ==========================================
        NAVBAR: แถบเมนูด้านบนสำหรับสลับโหมดโชว์กรรมการ
       ========================================== -->
    <nav class="bg-[#020617] border-b border-slate-800 p-4 sticky top-0 z-50 shadow-md">
        <div class="max-w-6xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-4">
            <div class="flex items-center gap-3">
                <span class="text-xl font-black tracking-wider text-cyan-400">🧠 TECH MATCH</span>
                <span class="bg-cyan-500/10 text-cyan-400 text-[10px] uppercase font-bold px-2 py-0.5 rounded border border-cyan-400/20">Endless Level Mode</span>
            </div>
            <div class="flex gap-2">
                <button id="btn-player-mode" onclick="switchView('welcome')" class="px-3 py-1.5 text-xs font-semibold rounded-lg bg-cyan-500 text-slate-950 transition-all cursor-pointer shadow-lg shadow-cyan-500/10">
                    🎮 ฝั่งผู้เล่น (Game UI)
                </button>
                <button id="btn-admin-mode" onclick="switchView('admin')" class="px-3 py-1.5 text-xs font-semibold rounded-lg bg-slate-800 text-slate-400 hover:bg-slate-700 transition-all cursor-pointer">
                    📊 ฝั่งผู้ดูแล (Admin Dashboard)
                </button>
            </div>
        </div>
    </nav>

    <!-- CONTENT WRAPPER -->
    <main class="max-w-6xl mx-auto p-4 md:p-6 flex-grow w-full">

        <!-- ==========================================
            INTERFACE 1: หน้าเข้าสู่เกม / ลงทะเบียน (Welcome)
           ========================================== -->
        <div id="view-welcome" class="max-w-md mx-auto my-12 bg-slate-800/40 backdrop-blur-md rounded-2xl p-6 border border-slate-700/50 shadow-2xl transition-all">
            <div class="text-center mb-6">
                <div class="w-16 h-16 bg-cyan-500/10 border border-cyan-500/20 rounded-2xl flex items-center justify-center mx-auto mb-3 text-3xl">
                    🎮
                </div>
                <h2 class="text-2xl font-bold text-white">เข้าสู่ระบบการแข่งขัน</h2>
                <p class="text-sm text-slate-400 mt-1">โหมดด่านไม่มีที่สิ้นสุด — เล่นได้เรื่อยๆ ยิ่งด่านสูง ยิ่งยาก ยิ่งท้าทาย!</p>
            </div>

            <div class="space-y-4">
                <div>
                  <label class="block text-xs font-semibold uppercase text-slate-400 tracking-wider mb-2">ชื่อ-นามสกุลผู้เล่น</label>
                  <input id="player-name" type="text" placeholder="เช่น นายสมชาย เรียนดี" class="w-full bg-slate-900/80 border border-slate-700 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-cyan-400 transition-colors text-white">
                </div>

                <div class="grid grid-cols-2 gap-4">
                  <div>
                    <label class="block text-xs font-semibold uppercase text-slate-400 tracking-wider mb-2">ระดับชั้น</label>
                    <select id="player-grade" class="w-full bg-slate-900/80 border border-slate-700 rounded-xl px-3 py-3 text-sm focus:outline-none focus:border-cyan-400 transition-colors text-white">
                      <option value="ม.4">มัธยมศึกษาปีที่ 4</option>
                      <option value="ม.5">มัธยมศึกษาปีที่ 5</option>
                      <option value="ม.6">มัธยมศึกษาปีที่ 6</option>
                    </select>
                  </div>
                  <div>
                    <label class="block text-xs font-semibold uppercase text-slate-400 tracking-wider mb-2">ห้องเรียน</label>
                    <select id="player-room" class="w-full bg-slate-900/80 border border-slate-700 rounded-xl px-3 py-3 text-sm focus:outline-none focus:border-cyan-400 transition-colors text-white">
                      <option value="ห้อง 1">ห้อง 1</option>
                      <option value="ห้อง 2">ห้อง 2</option>
                      <option value="ห้อง 3">ห้อง 3</option>
                      <option value="ห้อง 4">ห้อง 4</option>
                      <option value="ห้อง 5">ห้อง 5</option>
                      <option value="ห้อง 6">ห้อง 6</option>
                      <option value="ห้อง 7">ห้อง 7</option>
                      <option value="ห้อง 8">ห้อง 8</option>
                      <option value="ห้อง 9">ห้อง 9</option>


                    </select>
                  </div>
                </div>

                <button onclick="startNewGame(false)" class="w-full bg-cyan-500 hover:bg-cyan-400 text-slate-950 font-bold py-3.5 rounded-xl transition-all shadow-lg shadow-cyan-500/10 mt-2 cursor-pointer">
                  เริ่มด่านที่ 1 🚀
                </button>
            </div>
        </div>

        <!-- ==========================================
            INTERFACE 2: หน้ากระดานเกม (Gameplay Dashboard)
           ========================================== -->
        <div id="view-game" class="hidden max-w-5xl mx-auto space-y-6 transition-all">
            <!-- แถบรายงานสดฝั่งผู้เล่น -->
            <div class="bg-slate-800/80 rounded-2xl p-4 flex flex-col lg:flex-row justify-between items-center border border-slate-700 gap-4 shadow-lg">
                <div>
                  <span class="text-xs bg-cyan-500/10 text-cyan-400 border border-cyan-400/20 font-bold px-2 py-0.5 rounded">กำลังแข่งขัน</span>
                  <h3 id="display-player-info" class="text-lg font-bold text-white mt-1">👤 โหลดข้อมูลผู้เล่น...</h3>
                </div>
                <div class="flex flex-wrap justify-center gap-3 text-center">
                  <div class="bg-amber-500/10 border border-amber-500/30 px-4 py-2 rounded-xl min-w-[90px]">
                    <p class="text-[10px] text-amber-300 uppercase tracking-wider font-semibold">ด่านปัจจุบัน</p>
                    <p id="stat-level" class="text-xl font-mono font-bold text-amber-300">1</p>
                  </div>
                  <div class="bg-slate-900/60 border border-slate-700/50 px-4 py-2 rounded-xl min-w-[90px]">
                    <p class="text-[10px] text-slate-400 uppercase tracking-wider font-semibold">จำนวนครั้งที่เปิด</p>
                    <p id="stat-moves" class="text-xl font-mono font-bold text-amber-400">0</p>
                  </div>
                  <div class="bg-slate-900/60 border border-slate-700/50 px-4 py-2 rounded-xl min-w-[90px]">
                    <p class="text-[10px] text-slate-400 uppercase tracking-wider font-semibold">คะแนนสะสม</p>
                    <p id="stat-score" class="text-xl font-mono font-bold text-emerald-400">0</p>
                  </div>
                  <div id="stat-timer-box" class="hidden bg-rose-500/10 border border-rose-500/30 px-4 py-2 rounded-xl min-w-[90px]">
                    <p class="text-[10px] text-rose-300 uppercase tracking-wider font-semibold">เวลาที่เหลือ</p>
                    <p id="stat-timer" class="text-xl font-mono font-bold text-rose-300">--</p>
                  </div>
                </div>
            </div>

            <!-- ข้อความแจ้งเตือนเมื่อชนะเกม (Success Banner) -->
            <div id="success-banner" class="hidden bg-emerald-950/40 border-2 border-emerald-500/50 rounded-2xl p-6 text-center space-y-3 shadow-2xl">
                <h3 class="text-2xl font-black text-emerald-400">🎉 ด่านที่ <span id="success-level-num">1</span> สำเร็จ ยอดเยี่ยมมาก!</h3>
                <p class="text-sm text-emerald-200">ระบบประมวลผลทำการจัดส่งบันทึกคะแนนเข้าสู่ระบบฐานข้อมูลส่วนกลางสำหรับตรวจสอบแล้ว</p>
                <div class="flex justify-center gap-3 pt-2 flex-wrap">
                  <button onclick="nextLevel()" class="bg-emerald-500 hover:bg-emerald-400 text-slate-950 px-5 py-2 rounded-xl font-bold text-xs transition-colors cursor-pointer">
                    ไปด่านถัดไป (ด่าน <span id="next-level-num">2</span>)➡️
                  </button>
                  <button onclick="restartFromLevelOne()" class="bg-slate-800 hover:bg-slate-700 text-white px-4 py-2 rounded-xl font-bold text-xs border border-slate-700 transition-colors cursor-pointer">เริ่มใหม่ตั้งแต่ด่าน 1 🔄</button>
                  <button onclick="switchView('admin')" class="bg-slate-800 hover:bg-slate-700 text-white px-4 py-2 rounded-xl font-bold text-xs border border-slate-700 transition-colors cursor-pointer">เปิดแดชบอร์ดหลังบ้าน 📊</button>
                </div>
            </div>

            <!-- ข้อความแจ้งเตือนเมื่อหมดเวลา (Timeout Banner) -->
            <div id="timeout-banner" class="hidden bg-rose-950/40 border-2 border-rose-500/50 rounded-2xl p-6 text-center space-y-3 shadow-2xl">
                <h3 class="text-2xl font-black text-rose-400">⏰ หมดเวลา! ด่านที่ <span id="timeout-level-num">1</span></h3>
                <p class="text-sm text-rose-200">ไม่เป็นไร ลองใหม่อีกครั้งเพื่อพิชิตด่านนี้ คะแนนสะสมของด่านก่อนหน้ายังคงถูกบันทึกไว้</p>
                <div class="flex justify-center gap-3 pt-2 flex-wrap">
                  <button onclick="retrySameLevel()" class="bg-rose-500 hover:bg-rose-400 text-slate-950 px-5 py-2 rounded-xl font-bold text-xs transition-colors cursor-pointer">ลองด่านนี้อีกครั้ง 🔁</button>
                  <button onclick="restartFromLevelOne()" class="bg-slate-800 hover:bg-slate-700 text-white px-4 py-2 rounded-xl font-bold text-xs border border-slate-700 transition-colors cursor-pointer">เริ่มใหม่ตั้งแต่ด่าน 1 🔄</button>
                </div>
            </div>

            <!-- ตารางกริดวางการ์ดเกม (Game Card Grid) -->
            <div id="game-grid" class="grid grid-cols-4 gap-3 md:gap-4">
                <!-- การ์ดจะถูกเรนเดอร์ด้วย JavaScript ตรงนี้ -->
            </div>
        </div>

        <!-- ==========================================
            INTERFACE 3: ระบบหลังบ้านแอดมิน (Admin Dashboard)
           ========================================== -->
        <div id="view-admin" class="hidden space-y-6 transition-all">
            <!-- แถบเครื่องมือแอดมินด้านบน -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 bg-slate-800/30 p-4 rounded-2xl border border-slate-700/80">
              <div>
                <h2 class="text-xl font-bold text-white">📊 ระบบวิเคราะห์และรายงานผลการเรียนรู้ผ่านเกม</h2>
                <p class="text-xs text-slate-400 mt-0.5">ส่วนกลางสำหรับคณะกรรมการและอาจารย์ เพื่อทำการกรอง ค้นหา และวิเคราะห์ระดับคะแนนและด่านสูงสุดที่ทำได้</p>
              </div>
              <button onclick="exportDataAlert()" class="bg-emerald-500 hover:bg-emerald-400 text-slate-950 px-4 py-2 rounded-xl text-xs font-bold transition-all shadow-md flex items-center gap-1 cursor-pointer">
                📥 Export Report (Excel/PDF Ready)
              </button>
            </div>

            <!-- Global Filters สำหรับจำลองการใช้งานจริงให้กรรมการดู -->
            <div class="bg-slate-800/90 p-4 rounded-2xl border border-slate-700 grid grid-cols-1 sm:grid-cols-3 gap-4 shadow-lg">
              <div>
                <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-1.5">ค้นหารายชื่อผู้เล่น</label>
                <input id="filter-name" oninput="renderAdminTable()" type="text" placeholder="พิมพ์ชื่อนักเรียน..." class="w-full bg-slate-900 border border-slate-700 rounded-xl px-3 py-2 text-xs focus:outline-none focus:border-amber-400 text-white">
              </div>
              <div>
                <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-1.5">ตัวกรองระดับชั้น (Global Filter)</label>
                <select id="filter-grade" onchange="renderAdminTable()" class="w-full bg-slate-900 border border-slate-700 rounded-xl px-3 py-2 text-xs focus:outline-none focus:border-amber-400 text-white">
                  <option value="All">แสดงทุกระดับชั้น</option>
                  <option value="ม.4">มัธยมศึกษาปีที่ 4</option>
                  <option value="ม.5">มัธยมศึกษาปีที่ 5</option>
                  <option value="ม.6">มัธยมศึกษาปีที่ 6</option>
                </select>
              </div>
              <div>
                <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-1.5">ตัวกรองห้องเรียน</label>
                <select id="filter-room" onchange="renderAdminTable()" class="w-full bg-slate-900 border border-slate-700 rounded-xl px-3 py-2 text-xs focus:outline-none focus:border-amber-400 text-white">
                  <option value="All">แสดงทุกห้องเรียน</option>
                  <option value="ห้อง 1">ห้อง 1</option>
                  <option value="ห้อง 2">ห้อง 2</option>
                  <option value="ห้อง 3">ห้อง 3</option>
                  <option value="ห้อง 4">ห้อง 4</option>
                  <option value="ห้อง 5">ห้อง 5</option>
                  <option value="ห้อง 6">ห้อง 6</option>
                  <option value="ห้อง 7">ห้อง 7</option>
                  <option value="ห้อง 8">ห้อง 8</option>
                  <option value="ห้อง 9">ห้อง 9</option>
                </select>
              </div>
            </div>

            <!-- ตารางแสดงรายงานข้อมูลผู้เล่นจำลอง 50 แถว -->
            <div class="bg-slate-800 rounded-2xl border border-slate-700 overflow-hidden shadow-xl">
              <div class="p-4 bg-slate-800/50 border-b border-slate-700 flex justify-between items-center flex-wrap gap-2">
                <span class="text-xs font-bold text-amber-400 uppercase tracking-wider">ตารางวิเคราะห์สถิติค่าน้ำหนักคะแนนรวมประเมินผล</span>
                <span id="table-row-count" class="text-xs text-slate-400">กำลังคำนวณแถวข้อมูล...</span>
              </div>
              <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse text-xs">
                  <thead>
                    <tr class="bg-slate-900/60 border-b border-slate-700 text-slate-400 font-medium">
                      <th class="p-4 w-16 text-center">อันดับ</th>
                      <th class="p-4">รายชื่อผู้เข้าร่วมการแข่งขัน</th>
                      <th class="p-4">ระดับชั้น/กลุ่ม</th>
                      <th class="p-4 text-center">ด่านสูงสุด</th>
                      <th class="p-4 text-center">สถิติการพลิกการ์ด</th>
                      <th class="p-4 text-right">คะแนนสุทธิ</th>
                      <th class="p-4 text-center">วันที่เข้าเล่น</th>
                    </tr>
                  </thead>
                  <tbody id="admin-table-body" class="divide-y divide-slate-700/40">
                    <!-- ข้อมูลแถวตารางจะถูกเรนเดอร์ด้วย JavaScript -->
                  </tbody>
                </table>
              </div>
            </div>
        </div>

    </main>

    <!-- FOOTER -->
    <footer class="bg-[#020617] border-t border-slate-800 p-4 text-center text-xs text-slate-500">
        <p>© 2026 โครงงานระบบประเมินผลการเรียนรู้ผ่านเกมจับคู่การ์ดคอมพิวเตอร์ระดับมืออาชีพ — โหมดด่านไม่มีที่สิ้นสุด</p>
    </footer>

    <!-- ==========================================
        CORE JAVASCRIPT LOGIC (ระบบกลไกควบคุมเว็บ)
       ========================================== -->
    <script>
        // 1. คลังคำศัพท์คอมพิวเตอร์ ไทย-อังกฤษ แบ่งเป็น 4 ระดับความยาก รวม 80 คู่ (160 คำ)
        //    เหมาะสมกับระดับชั้น ม.4-ม.6 โดยด่านแรกๆ จะใช้คำง่าย คำแปลสั้นกระชับ
        //    แล้วค่อยๆ เพิ่มความยากของคำศัพท์และความยาวของคำแปลตามด่านที่สูงขึ้น
        // ---- TIER 1: ง่ายมาก (คำพื้นฐานที่ใช้ในชีวิตประจำวัน คำแปลสั้น 1 คำ) ----
        const vocabTier1 = [
            { pairId: 1,  content: 'Computer', type: 'term' },   { pairId: 1,  content: 'คอมพิวเตอร์', type: 'definition' },
            { pairId: 2,  content: 'Mouse', type: 'term' },      { pairId: 2,  content: 'เมาส์', type: 'definition' },
            { pairId: 3,  content: 'Keyboard', type: 'term' },   { pairId: 3,  content: 'แป้นพิมพ์', type: 'definition' },
            { pairId: 4,  content: 'Monitor', type: 'term' },    { pairId: 4,  content: 'จอภาพ', type: 'definition' },
            { pairId: 5,  content: 'Printer', type: 'term' },    { pairId: 5,  content: 'เครื่องพิมพ์', type: 'definition' },
            { pairId: 6,  content: 'Internet', type: 'term' },   { pairId: 6,  content: 'อินเทอร์เน็ต', type: 'definition' },
            { pairId: 7,  content: 'Email', type: 'term' },      { pairId: 7,  content: 'อีเมล', type: 'definition' },
            { pairId: 8,  content: 'Website', type: 'term' },    { pairId: 8,  content: 'เว็บไซต์', type: 'definition' },
            { pairId: 9,  content: 'File', type: 'term' },       { pairId: 9,  content: 'ไฟล์', type: 'definition' },
            { pairId: 10, content: 'Folder', type: 'term' },     { pairId: 10, content: 'โฟลเดอร์', type: 'definition' },
            { pairId: 11, content: 'Password', type: 'term' },   { pairId: 11, content: 'รหัสผ่าน', type: 'definition' },
            { pairId: 12, content: 'Save', type: 'term' },       { pairId: 12, content: 'บันทึก', type: 'definition' },
            { pairId: 13, content: 'Delete', type: 'term' },     { pairId: 13, content: 'ลบ', type: 'definition' },
            { pairId: 14, content: 'Copy', type: 'term' },       { pairId: 14, content: 'คัดลอก', type: 'definition' },
            { pairId: 15, content: 'Camera', type: 'term' },     { pairId: 15, content: 'กล้อง', type: 'definition' },
            { pairId: 16, content: 'Speaker', type: 'term' },    { pairId: 16, content: 'ลำโพง', type: 'definition' },
            { pairId: 17, content: 'Laptop', type: 'term' },     { pairId: 17, content: 'แล็ปท็อป', type: 'definition' },
            { pairId: 18, content: 'Smartphone', type: 'term' }, { pairId: 18, content: 'สมาร์ทโฟน', type: 'definition' },
            { pairId: 19, content: 'Download', type: 'term' },   { pairId: 19, content: 'ดาวน์โหลด', type: 'definition' },
            { pairId: 20, content: 'Upload', type: 'term' },     { pairId: 20, content: 'อัปโหลด', type: 'definition' }
        ];
        // ---- TIER 2: ปานกลาง (แนวคิดพื้นฐานของระบบคอมพิวเตอร์ คำแปลเป็นวลีสั้นๆ) ----
        const vocabTier2 = [
            { pairId: 21, content: 'Software', type: 'term' },        { pairId: 21, content: 'โปรแกรมคอมพิวเตอร์', type: 'definition' },
            { pairId: 22, content: 'Hardware', type: 'term' },        { pairId: 22, content: 'อุปกรณ์คอมพิวเตอร์', type: 'definition' },
            { pairId: 23, content: 'Operating System', type: 'term' },{ pairId: 23, content: 'ระบบปฏิบัติการ', type: 'definition' },
            { pairId: 24, content: 'Server', type: 'term' },          { pairId: 24, content: 'เครื่องแม่ข่าย', type: 'definition' },
            { pairId: 25, content: 'Network', type: 'term' },         { pairId: 25, content: 'เครือข่ายคอมพิวเตอร์', type: 'definition' },
            { pairId: 26, content: 'Database', type: 'term' },        { pairId: 26, content: 'ฐานข้อมูล', type: 'definition' },
            { pairId: 27, content: 'Bug', type: 'term' },              { pairId: 27, content: 'ข้อผิดพลาดในโปรแกรม', type: 'definition' },
            { pairId: 28, content: 'Virus', type: 'term' },           { pairId: 28, content: 'ไวรัสคอมพิวเตอร์', type: 'definition' },
            { pairId: 29, content: 'Backup', type: 'term' },          { pairId: 29, content: 'การสำรองข้อมูล', type: 'definition' },
            { pairId: 30, content: 'Memory (RAM)', type: 'term' },    { pairId: 30, content: 'หน่วยความจำชั่วคราว', type: 'definition' },
            { pairId: 31, content: 'Processor (CPU)', type: 'term' }, { pairId: 31, content: 'หน่วยประมวลผลกลาง', type: 'definition' },
            { pairId: 32, content: 'USB', type: 'term' },              { pairId: 32, content: 'พอร์ตเชื่อมต่ออุปกรณ์', type: 'definition' },
            { pairId: 33, content: 'Bluetooth', type: 'term' },       { pairId: 33, content: 'ระบบเชื่อมต่อไร้สายระยะใกล้', type: 'definition' },
            { pairId: 34, content: 'Router', type: 'term' },          { pairId: 34, content: 'อุปกรณ์กระจายสัญญาณเครือข่าย', type: 'definition' },
            { pairId: 35, content: 'Domain', type: 'term' },          { pairId: 35, content: 'ชื่อที่อยู่เว็บไซต์', type: 'definition' },
            { pairId: 36, content: 'HTML', type: 'term' },            { pairId: 36, content: 'ภาษาสำหรับสร้างหน้าเว็บ', type: 'definition' },
            { pairId: 37, content: 'Python', type: 'term' },          { pairId: 37, content: 'ภาษาโปรแกรมยอดนิยม', type: 'definition' },
            { pairId: 38, content: 'Algorithm', type: 'term' },       { pairId: 38, content: 'ขั้นตอนวิธีแก้ปัญหา', type: 'definition' },
            { pairId: 39, content: 'Variable', type: 'term' },        { pairId: 39, content: 'ตัวแปรเก็บค่าข้อมูล', type: 'definition' },
            { pairId: 40, content: 'Loop', type: 'term' },            { pairId: 40, content: 'คำสั่งวนซ้ำในโปรแกรม', type: 'definition' }
        ];
        // ---- TIER 3: ยาก (ศัพท์เทคนิคระดับกลาง-สูง คำแปลอธิบายสั้นๆ) ----
        const vocabTier3 = [
            { pairId: 41, content: 'API', type: 'term' },              { pairId: 41, content: 'ช่องทางเชื่อมต่อระหว่างระบบ', type: 'definition' },
            { pairId: 42, content: 'SQL', type: 'term' },              { pairId: 42, content: 'ภาษาจัดการฐานข้อมูล', type: 'definition' },
            { pairId: 43, content: 'Cloud Computing', type: 'term' }, { pairId: 43, content: 'บริการประมวลผลผ่านอินเทอร์เน็ต', type: 'definition' },
            { pairId: 44, content: 'GitHub', type: 'term' },          { pairId: 44, content: 'แพลตฟอร์มเก็บซอร์สโค้ด', type: 'definition' },
            { pairId: 45, content: 'Cybersecurity', type: 'term' },   { pairId: 45, content: 'ความปลอดภัยทางไซเบอร์', type: 'definition' },
            { pairId: 46, content: 'Big Data', type: 'term' },        { pairId: 46, content: 'ข้อมูลขนาดใหญ่ที่ซับซ้อน', type: 'definition' },
            { pairId: 47, content: 'Machine Learning', type: 'term' },{ pairId: 47, content: 'การเรียนรู้ของเครื่องจากข้อมูล', type: 'definition' },
            { pairId: 48, content: 'IoT', type: 'term' },              { pairId: 48, content: 'อุปกรณ์เชื่อมต่ออินเทอร์เน็ต', type: 'definition' },
            { pairId: 49, content: 'Encryption', type: 'term' },      { pairId: 49, content: 'การเข้ารหัสข้อมูล', type: 'definition' },
            { pairId: 50, content: 'Compiler', type: 'term' },        { pairId: 50, content: 'โปรแกรมแปลงภาษาโปรแกรม', type: 'definition' },
            { pairId: 51, content: 'Binary', type: 'term' },          { pairId: 51, content: 'ระบบเลขฐานสอง', type: 'definition' },
            { pairId: 52, content: 'Bandwidth', type: 'term' },       { pairId: 52, content: 'ความกว้างของช่องสัญญาณ', type: 'definition' },
            { pairId: 53, content: 'Firewall', type: 'term' },        { pairId: 53, content: 'ระบบป้องกันการบุกรุก', type: 'definition' },
            { pairId: 54, content: 'Framework', type: 'term' },       { pairId: 54, content: 'โครงสร้างสำหรับพัฒนาโปรแกรม', type: 'definition' },
            { pairId: 55, content: 'Repository', type: 'term' },      { pairId: 55, content: 'ที่เก็บซอร์สโค้ด', type: 'definition' },
            { pairId: 56, content: 'Protocol', type: 'term' },        { pairId: 56, content: 'กฎการสื่อสารระหว่างระบบ', type: 'definition' },
            { pairId: 57, content: 'Cache', type: 'term' },           { pairId: 57, content: 'หน่วยเก็บข้อมูลชั่วคราวเพื่อความเร็ว', type: 'definition' },
            { pairId: 58, content: 'Authentication', type: 'term' },  { pairId: 58, content: 'การยืนยันตัวตนผู้ใช้', type: 'definition' },
            { pairId: 59, content: 'Data Mining', type: 'term' },     { pairId: 59, content: 'การขุดค้นข้อมูลเชิงลึก', type: 'definition' },
            { pairId: 60, content: 'Open Source', type: 'term' },     { pairId: 60, content: 'ซอฟต์แวร์เปิดเผยซอร์สโค้ด', type: 'definition' }
        ];
        // ---- TIER 4: ผู้เชี่ยวชาญ (ศัพท์เทคนิคเฉพาะทางขั้นสูง) ----
        const vocabTier4 = [
            { pairId: 61, content: 'Artificial Intelligence', type: 'term' }, { pairId: 61, content: 'ปัญญาประดิษฐ์เลียนแบบความคิดมนุษย์', type: 'definition' },
            { pairId: 62, content: 'Neural Network', type: 'term' },          { pairId: 62, content: 'โครงข่ายประสาทเทียมจำลองสมอง', type: 'definition' },
            { pairId: 63, content: 'Deep Learning', type: 'term' },           { pairId: 63, content: 'การเรียนรู้เชิงลึกหลายชั้น', type: 'definition' },
            { pairId: 64, content: 'Blockchain', type: 'term' },              { pairId: 64, content: 'บัญชีข้อมูลแบบกระจายศูนย์', type: 'definition' },
            { pairId: 65, content: 'Cryptography', type: 'term' },            { pairId: 65, content: 'ศาสตร์การเข้ารหัสข้อมูล', type: 'definition' },
            { pairId: 66, content: 'Quantum Computing', type: 'term' },       { pairId: 66, content: 'การประมวลผลด้วยควอนตัม', type: 'definition' },
            { pairId: 67, content: 'Distributed System', type: 'term' },      { pairId: 67, content: 'ระบบประมวลผลแบบกระจาย', type: 'definition' },
            { pairId: 68, content: 'Concurrency', type: 'term' },             { pairId: 68, content: 'การทำงานพร้อมกันหลายส่วน', type: 'definition' },
            { pairId: 69, content: 'Deadlock', type: 'term' },                { pairId: 69, content: 'ภาวะติดขัดของโปรเซสที่รอกัน', type: 'definition' },
            { pairId: 70, content: 'Buffer Overflow', type: 'term' },         { pairId: 70, content: 'ข้อมูลล้นเกินขอบเขตหน่วยความจำ', type: 'definition' },
            { pairId: 71, content: 'SQL Injection', type: 'term' },           { pairId: 71, content: 'การโจมตีแทรกคำสั่งฐานข้อมูล', type: 'definition' },
            { pairId: 72, content: 'DDoS Attack', type: 'term' },             { pairId: 72, content: 'การโจมตีถล่มระบบด้วยทราฟฟิก', type: 'definition' },
            { pairId: 73, content: 'Penetration Testing', type: 'term' },     { pairId: 73, content: 'การทดสอบเจาะระบบความปลอดภัย', type: 'definition' },
            { pairId: 74, content: 'Hash Function', type: 'term' },           { pairId: 74, content: 'ฟังก์ชันแปลงข้อมูลเป็นรหัสเฉพาะ', type: 'definition' },
            { pairId: 75, content: 'Load Balancer', type: 'term' },           { pairId: 75, content: 'ตัวกระจายภาระงานเซิร์ฟเวอร์', type: 'definition' },
            { pairId: 76, content: 'Microservices', type: 'term' },           { pairId: 76, content: 'สถาปัตยกรรมบริการย่อยอิสระ', type: 'definition' },
            { pairId: 77, content: 'Serverless Computing', type: 'term' },    { pairId: 77, content: 'การประมวลผลแบบไร้เซิร์ฟเวอร์', type: 'definition' },
            { pairId: 78, content: 'Edge Computing', type: 'term' },          { pairId: 78, content: 'การประมวลผลใกล้แหล่งข้อมูล', type: 'definition' },
            { pairId: 79, content: 'Generative AI', type: 'term' },           { pairId: 79, content: 'ปัญญาประดิษฐ์สร้างเนื้อหาใหม่', type: 'definition' },
            { pairId: 80, content: 'Large Language Model', type: 'term' },    { pairId: 80, content: 'โมเดลภาษาขนาดใหญ่เข้าใจภาษามนุษย์', type: 'definition' }
        ];

        // 2. ลีดเดอร์บอร์ดข้อมูลจริงจากผู้เล่นที่เล่นจบด่านจริงๆ เท่านั้น (ไม่มีการสุ่มชื่อ)
        //    ข้อมูลถูกดึงมาจากฐานข้อมูลฝั่งเซิร์ฟเวอร์ (api/get_scores.php) แบบเรียลไทม์
        const API_SAVE_SCORE = 'api/save_score.php';
        const API_GET_SCORES = 'api/get_scores.php';
        const LEADERBOARD_POLL_MS = 4000; // ดึงข้อมูลใหม่ทุก 4 วินาทีเพื่อความเรียลไทม์

        let leaderboardData = [];
        let leaderboardPollTimer = null;

        // ดึงข้อมูลลีดเดอร์บอร์ดล่าสุดจากเซิร์ฟเวอร์
        async function fetchLeaderboard() {
            try {
                const res = await fetch(API_GET_SCORES, { cache: 'no-store' });
                if (!res.ok) throw new Error('HTTP ' + res.status);
                const data = await res.json();
                leaderboardData = Array.isArray(data) ? data : [];
                // ถ้ากำลังเปิดหน้าแอดมินอยู่ ให้รีเฟรชตารางทันที
                if (!document.getElementById('view-admin').classList.contains('hidden')) {
                    renderAdminTable();
                }
            } catch (err) {
                console.error('ไม่สามารถโหลดข้อมูลลีดเดอร์บอร์ดได้:', err);
                const rowCount = document.getElementById('table-row-count');
                if (rowCount) rowCount.innerHTML = '⚠️ ไม่สามารถเชื่อมต่อฐานข้อมูลได้ (ตรวจสอบว่ารันผ่าน PHP/XAMPP)';
            }
        }

        // บันทึกผลการเล่นจริงของผู้เล่นคนปัจจุบันขึ้นเซิร์ฟเวอร์
        async function submitScore(entry) {
            try {
                const res = await fetch(API_SAVE_SCORE, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(entry)
                });
                if (!res.ok) throw new Error('HTTP ' + res.status);
                await fetchLeaderboard(); // รีเฟรชลีดเดอร์บอร์ดทันทีหลังบันทึกสำเร็จ
            } catch (err) {
                console.error('ไม่สามารถบันทึกคะแนนขึ้นเซิร์ฟเวอร์ได้:', err);
            }
        }

        // เริ่มดึงข้อมูลลีดเดอร์บอร์ดแบบเรียลไทม์ทันทีที่หน้าเว็บโหลด แล้วดึงซ้ำเป็นระยะ
        function startLeaderboardPolling() {
            fetchLeaderboard();
            if (leaderboardPollTimer) clearInterval(leaderboardPollTimer);
            leaderboardPollTimer = setInterval(fetchLeaderboard, LEADERBOARD_POLL_MS);
        }

        // 3. ตัวแปรสถานะภายในแอปพลิเคชัน (Application Engine State)
        let gameCards = [];
        let flippedCardsIndices = [];
        let matchedCardsIndices = [];
        let movesCounter = 0;
        let scoreCounter = 0;
        let currentLevel = 1;
        let activePlayer = { name: '', grade: '', room: '' };
        let timerInterval = null;
        let timeRemaining = 0;
        let isLocked = false; // ป้องกันการคลิกระหว่างช่วงหน่วงเวลาแมตช์ผิด

        // 4. ฟังก์ชันสำหรับเปลี่ยนหน้า Interface (Navigation Routing)
        function switchView(viewName) {
            document.getElementById('view-welcome').classList.add('hidden');
            document.getElementById('view-game').classList.add('hidden');
            document.getElementById('view-admin').classList.add('hidden');

            // อัปเดตสีของปุ่มนำทางแยกตามฝั่ง
            const btnPlayer = document.getElementById('btn-player-mode');
            const btnAdmin = document.getElementById('btn-admin-mode');

            btnPlayer.className = "px-3 py-1.5 text-xs font-semibold rounded-lg bg-slate-800 text-slate-400 hover:bg-slate-700 transition-all cursor-pointer";
            btnAdmin.className = "px-3 py-1.5 text-xs font-semibold rounded-lg bg-slate-800 text-slate-400 hover:bg-slate-700 transition-all cursor-pointer";

            if (viewName === 'welcome' || viewName === 'game') {
                btnPlayer.className = "px-3 py-1.5 text-xs font-semibold rounded-lg bg-cyan-500 text-slate-950 transition-all shadow-lg shadow-cyan-500/10 cursor-pointer";
                if (activePlayer.name !== '') {
                    document.getElementById('view-game').classList.remove('hidden');
                } else {
                    document.getElementById('view-welcome').classList.remove('hidden');
                }
            } else if (viewName === 'admin') {
                btnAdmin.className = "px-3 py-1.5 text-xs font-semibold rounded-lg bg-amber-500 text-slate-950 transition-all shadow-lg shadow-amber-500/10 cursor-pointer";
                document.getElementById('view-admin').classList.remove('hidden');
                fetchLeaderboard(); // ดึงข้อมูลล่าสุดทันทีที่เปิดแดชบอร์ด
                renderAdminTable();
            }
        }

        // 5. เลือกคลังคำศัพท์ที่เหมาะกับแต่ละด่าน (Progressive Difficulty by Tier)
        //    - ด่าน 1-3   : ใช้เฉพาะ TIER 1 (คำง่ายมาก คำแปลสั้น)
        //    - ด่าน 4-6   : ผสม TIER 1 + TIER 2 (เริ่มมีศัพท์เทคนิคพื้นฐาน)
        //    - ด่าน 7-9   : ผสม TIER 2 + TIER 3 (ศัพท์เทคนิคระดับกลาง-สูง)
        //    - ด่าน 10-12 : ผสม TIER 3 + TIER 4 (ศัพท์เฉพาะทางขั้นสูง)
        //    - ด่าน 13+   : รวมคลังทั้งหมด (Endless Mix) หมุนเวียนคำศัพท์ทั้ง 80 คู่ไม่มีที่สิ้นสุด
        function getPoolForLevel(level) {
            if (level <= 3) return vocabTier1;
            if (level <= 6) return vocabTier1.concat(vocabTier2);
            if (level <= 9) return vocabTier2.concat(vocabTier3);
            if (level <= 12) return vocabTier3.concat(vocabTier4);
            return vocabTier1.concat(vocabTier2, vocabTier3, vocabTier4);
        }

        // 6. คำนวณค่าความยากของแต่ละด่านแบบไม่มีที่สิ้นสุด (Infinite Difficulty Scaling)
        //    - จำนวนคู่การ์ด "คงที่ 8 คู่" ทุกด่าน (กระดาน 4x4 เสมอ) — ไม่เพิ่มจำนวนคำขึ้นเรื่อยๆ
        //    - ความยากเพิ่มขึ้นจาก 2 ปัจจัยแทน:
        //      1) คำศัพท์ที่สุ่มมาจะยากขึ้นเรื่อยๆ ตามด่าน (ดู getPoolForLevel)
        //      2) ตั้งแต่ด่านที่ 5 เป็นต้นไป เวลาจะเริ่มบีบสั้นลงเรื่อยๆ (ต่ำสุด 20 วินาที)
        function getLevelConfig(level) {
            const pairCount = 8;
            let timeLimit = null;
            if (level >= 5) {
                timeLimit = Math.max(20, 90 - (level - 5) * 6);
            }
            return { pairCount, timeLimit };
        }

        // 7. สุ่มเลือกคู่คำศัพท์จากคลังของด่านนั้นๆ ตามจำนวนที่ต้องการ แล้วสับไพ่ด้วย Fisher-Yates Shuffle
        function buildLevelDeck(level, pairCount) {
            const pool = getPoolForLevel(level);
            // จัดกลุ่มคำศัพท์ตาม pairId
            const pairIds = [...new Set(pool.map(c => c.pairId))];
            // สับลำดับ pairId ก่อน แล้วเลือกจำนวนตามที่ด่านต้องการ
            for (let i = pairIds.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [pairIds[i], pairIds[j]] = [pairIds[j], pairIds[i]];
            }
            const chosenIds = pairIds.slice(0, pairCount);
            let deck = pool.filter(c => chosenIds.includes(c.pairId));
            // สับตำแหน่งการ์ดทั้งหมดในกระดาน
            for (let i = deck.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [deck[i], deck[j]] = [deck[j], deck[i]];
            }
            return JSON.parse(JSON.stringify(deck));
        }

        // 7. กลไกเริ่มต้นเกมใหม่ทั้งหมด (ผู้เล่นใหม่ / เริ่มจากด่าน 1)
        function startNewGame(isContinuing) {
            const inputName = document.getElementById('player-name').value.trim();
            if (!isContinuing) {
                if (inputName === '' && activePlayer.name === '') {
                    alert('กรุณากรอกชื่อผู้เล่นก่อนเริ่มเข้าแข่งขัน!');
                    return;
                }
                if (inputName !== '') {
                    activePlayer.name = inputName;
                    activePlayer.grade = document.getElementById('player-grade').value;
                    activePlayer.room = document.getElementById('player-room').value;
                }
                currentLevel = 1;
                scoreCounter = 0;
                movesCounter = 0;
            }

            // แสดงรายงานชื่อด้านบนกระดาน
            document.getElementById('display-player-info').innerHTML = `👤 ${activePlayer.name} <span class="text-xs font-normal text-slate-400">(${activePlayer.grade}/${activePlayer.room})</span>`;

            loadLevel(currentLevel);
            switchView('game');
        }

        // 8. โหลดด่านตามหมายเลขที่กำหนด พร้อมตั้งค่าตัวจับเวลาตามความยาก
        function loadLevel(level) {
            stopTimer();
            isLocked = false;
            flippedCardsIndices = [];
            matchedCardsIndices = [];
            document.getElementById('success-banner').classList.add('hidden');
            document.getElementById('timeout-banner').classList.add('hidden');

            const config = getLevelConfig(level);
            gameCards = buildLevelDeck(level, config.pairCount);

            document.getElementById('stat-level').innerText = level;
            document.getElementById('stat-moves').innerText = movesCounter;
            document.getElementById('stat-score').innerText = scoreCounter;

            const timerBox = document.getElementById('stat-timer-box');
            if (config.timeLimit) {
                timeRemaining = config.timeLimit;
                timerBox.classList.remove('hidden');
                updateTimerDisplay();
                timerInterval = setInterval(() => {
                    timeRemaining--;
                    updateTimerDisplay();
                    if (timeRemaining <= 0) {
                        handleTimeout();
                    }
                }, 1000);
            } else {
                timerBox.classList.add('hidden');
            }

            renderGameGrid();
        }

        function updateTimerDisplay() {
            const el = document.getElementById('stat-timer');
            el.innerText = timeRemaining + 's';
            if (timeRemaining <= 10) {
                el.classList.add('timer-warn');
            } else {
                el.classList.remove('timer-warn');
            }
        }

        function stopTimer() {
            if (timerInterval) {
                clearInterval(timerInterval);
                timerInterval = null;
            }
        }

        // 9. เมื่อหมดเวลาในด่านที่มีตัวจับเวลา
        function handleTimeout() {
            stopTimer();
            isLocked = true;
            document.getElementById('timeout-level-num').innerText = currentLevel;
            document.getElementById('timeout-banner').classList.remove('hidden');
        }

        function retrySameLevel() {
            loadLevel(currentLevel);
        }

        function restartFromLevelOne() {
            currentLevel = 1;
            scoreCounter = 0;
            movesCounter = 0;
            loadLevel(currentLevel);
        }

        // 10. เมื่อผ่านด่าน ให้ไปด่านถัดไปโดยไม่มีที่สิ้นสุด
        function nextLevel() {
            currentLevel++;
            loadLevel(currentLevel);
        }

        // 11. ฟังก์ชันวาดโครงสร้างและการสร้าง Card Interaction บน HTML หน้าเว็บ
        function renderGameGrid() {
            const gridContainer = document.getElementById('game-grid');
            gridContainer.innerHTML = '';

            gameCards.forEach((card, index) => {
                const cardWrapper = document.createElement('div');
                cardWrapper.className = "h-28 md:h-32 cursor-pointer perspective-1000";
                cardWrapper.setAttribute('onclick', `handleCardSelection(${index})`);

                const isFlipped = flippedCardsIndices.includes(index) || matchedCardsIndices.includes(index);
                const isMatched = matchedCardsIndices.includes(index);

                cardWrapper.innerHTML = `
                    <div class="relative w-full h-full text-center transition-transform duration-500 preserve-3d ${isFlipped ? 'rotate-y-180' : ''}">
                        <!-- ด้านหลังการ์ด (Card Back) -->
                        <div class="absolute inset-0 w-full h-full bg-gradient-to-br from-slate-800 to-slate-850 rounded-2xl flex flex-col justify-center items-center border border-cyan-500/20 hover:border-cyan-400/60 transition-all shadow-md backface-hidden">
                            <div class="w-10 h-10 rounded-xl bg-cyan-500/5 flex items-center justify-center border border-cyan-500/10">
                                <span class="text-sm font-black text-cyan-400/40">TM</span>
                            </div>
                        </div>
                        <!-- ด้านหน้าการ์ด (Card Front) -->
                        <div class="absolute inset-0 w-full h-full rounded-2xl p-3 flex flex-col justify-center items-center shadow-lg backface-hidden rotate-y-180 border ${
                            isMatched
                                ? 'bg-emerald-950/50 border-emerald-500/60 text-emerald-300'
                                : 'bg-slate-800 border-slate-600 text-white'
                        }">
                            <span class="text-[9px] uppercase font-bold tracking-widest px-2 py-0.5 rounded-full mb-1.5 ${card.type === 'term' ? 'bg-cyan-500/10 text-cyan-400' : 'bg-purple-500/10 text-purple-400'}">
                                ${card.type === 'term' ? 'คำศัพท์' : 'คำอธิบาย'}
                            </span>
                            <p class="text-center font-medium leading-snug ${card.type === 'term' ? 'text-xs md:text-sm font-bold text-white' : 'text-[10px] md:text-xs text-slate-300'}">
                                ${card.content}
                            </p>
                        </div>
                    </div>
                `;
                gridContainer.appendChild(cardWrapper);
            });
        }

        // 12. ลอจิกการคำนวณสิทธิ์การคลิกและการเช็คเงื่อนไขความถูกต้อง (Core Logic Game Match)
        function handleCardSelection(clickedIndex) {
            if (isLocked) return;
            // ป้องกันเบื้องต้น: ห้ามคลิกซ้ำซ้อนการ์ดที่ค้างอยู่ หรือการ์ดที่ผ่านการแมตช์เรียบร้อยแล้ว
            if (flippedCardsIndices.length === 2 || flippedCardsIndices.includes(clickedIndex) || matchedCardsIndices.includes(clickedIndex)) return;

            flippedCardsIndices.push(clickedIndex);
            renderGameGrid();

            if (flippedCardsIndices.length === 2) {
                movesCounter++;
                document.getElementById('stat-moves').innerText = movesCounter;

                const firstCard = gameCards[flippedCardsIndices[0]];
                const secondCard = gameCards[flippedCardsIndices[1]];

                if (firstCard.pairId === secondCard.pairId) {
                    // เงื่อนไข TRUE MATCH: จับคู่ถูก — คะแนนโบนัสยิ่งเพิ่มตามด่านที่สูงขึ้น
                    matchedCardsIndices.push(flippedCardsIndices[0], flippedCardsIndices[1]);
                    const basePoints = Math.max(200, 1000 - (movesCounter * 25));
                    scoreCounter += basePoints * currentLevel;
                    document.getElementById('stat-score').innerText = scoreCounter;
                    flippedCardsIndices = [];

                    // สั่งอัปเดตหน้าสีการ์ด
                    setTimeout(renderGameGrid, 200);

                    // จบด่านสมบูรณ์ (All Pairs Found)
                    if (matchedCardsIndices.length === gameCards.length) {
                        stopTimer();
                        isLocked = true;
                        document.getElementById('success-level-num').innerText = currentLevel;
                        document.getElementById('next-level-num').innerText = currentLevel + 1;
                        document.getElementById('success-banner').classList.remove('hidden');

                        // บันทึกผลการเล่นจริงของผู้เล่นคนนี้ขึ้นฐานข้อมูลกลาง (server)
                        // เพื่อให้ลีดเดอร์บอร์ดแสดงเฉพาะคนที่เล่นจริง แบบเรียลไทม์
                        submitScore({
                            name: activePlayer.name,
                            grade: activePlayer.grade,
                            room: activePlayer.room,
                            level: currentLevel,
                            moves: movesCounter,
                            score: scoreCounter
                        });
                    }
                } else {
                    // เงื่อนไข MISMATCH: จับคู่ผิด หน่วงเวลา 1 วินาทีแล้วพลิกคว่ำคืน
                    isLocked = true;
                    setTimeout(() => {
                        flippedCardsIndices = [];
                        isLocked = false;
                        renderGameGrid();
                    }, 1000);
                }
            }
        }

        // 13. ฟังก์ชันของฝั่งแอดมินเพื่อการดึงข้อมูลตัวกรองแบบสถิติ Real-time Global Filter
        function renderAdminTable() {
            const searchName = document.getElementById('filter-name').value.toLowerCase();
            const filterGrade = document.getElementById('filter-grade').value;
            const filterRoom = document.getElementById('filter-room').value;

            const tableBody = document.getElementById('admin-table-body');
            tableBody.innerHTML = '';

            // คัดกรองข้อมูลจากอาเรย์ Array.filter
            const filteredData = leaderboardData.filter(item => {
                const matchName = item.name.toLowerCase().includes(searchName);
                const matchGrade = (filterGrade === 'All') || (item.grade === filterGrade);
                const matchRoom = (filterRoom === 'All') || (item.room === filterRoom);
                return matchName && matchGrade && matchRoom;
            });

            document.getElementById('table-row-count').innerHTML = `พบข้อมูลที่คัดกรองทั้งหมด <strong class="text-white font-mono">${filteredData.length}</strong> รายการ`;

            if (filteredData.length === 0) {
                tableBody.innerHTML = `<tr><td colspan="7" class="p-8 text-center text-slate-500 font-medium">❌ ไม่พบรายงานสถิติที่ตรงกับเงื่อนไขตัวกรองของคุณ</td></tr>`;
                return;
            }

            filteredData.forEach((item, index) => {
                const tr = document.createElement('tr');
                tr.className = "hover:bg-slate-700/20 transition-colors text-slate-300 border-b border-slate-800/60";

                // ตกแต่งอันดับเหรียญทอง เงิน ทองแดง ให้สวยงามน่ามอง
                let rankBadge = index + 1;
                if (index === 0 && searchName === '' && filterGrade === 'All') rankBadge = `<span class="bg-amber-500/20 text-amber-400 px-2 py-0.5 rounded-md font-bold">1</span>`;
                else if (index === 1 && searchName === '' && filterGrade === 'All') rankBadge = `<span class="bg-slate-300/20 text-slate-100 px-2 py-0.5 rounded-md font-bold">2</span>`;
                else if (index === 2 && searchName === '' && filterGrade === 'All') rankBadge = `<span class="bg-amber-700/20 text-amber-600 px-2 py-0.5 rounded-md font-bold">3</span>`;

                tr.innerHTML = `
                    <td class="p-4 text-center font-mono font-bold">${rankBadge}</td>
                    <td class="p-4 font-semibold text-white">${item.name}</td>
                    <td class="p-4">${item.grade} / ${item.room}</td>
                    <td class="p-4 text-center font-mono font-bold text-cyan-400">${item.level ?? 1}</td>
                    <td class="p-4 text-center font-mono">${item.moves} ครั้ง</td>
                    <td class="p-4 text-right font-mono font-bold text-emerald-400">${item.score.toLocaleString()}</td>
                    <td class="p-4 text-center text-slate-400 font-mono">${item.date}</td>
                `;
                tableBody.appendChild(tr);
            });
        }

        // แจ้งเตือนจำลองการดาวน์โหลดรายงาน
        function exportDataAlert() {
            alert('📊 [โครงงานระบบคอมพิวเตอร์]\nทำการจำลองเชื่อมต่อปลั๊กอินส่งออกข้อมูลเสร็จสิ้น ข้อมูลพร้อมแปลงไฟล์เป็น Excel (XLSX) และ PDF เรียบร้อยแล้ว!');
        }

        // 14. เริ่มระบบดึงข้อมูลลีดเดอร์บอร์ดจากเซิร์ฟเวอร์ทันทีที่เปิดหน้าเว็บ (Real-time Sync)
        startLeaderboardPolling();
    </script>
</body>
</html>