<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panduan Lengkap: Child Grooming - BinaRuang.id</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
   /* ===== HEADER (Samakan dengan index.php) ===== */
        header {
            display: flex;
            justify-content: center;
            padding: 0 24px;
            background: #c8e6f5;
            position: sticky;
            top: 0;
            z-index: 50;
            border-radius: 0 0 16px 16px;
            border-bottom: 1px solid #a8d4eb;
            box-shadow: 0 2px 12px rgba(100,170,210,0.15);
        }

      .header-inner {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 14px 0;
    width: 100%;
    max-width: 1140px; /* Diubah dari 64rem ke 1140px */
    margin: 0 auto;    /* Ditambahkan agar ke tengah */
}

        .logo {
            font-size: 24px; font-weight: 800; color: #2a6480;
            display: flex; align-items: center; gap: 8px;
        }

        nav {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        nav a {
            font-size: 14px;
            font-weight: 600;
            color: #3a7a9c;
            padding: 8px 16px;
            border-radius: 10px;
            border: 1px solid transparent;
            transition: all 0.2s ease;
            white-space: nowrap;
            text-decoration: none;
        }

        nav a:hover, nav a.active {
            color: #1e5570;
            background-color: rgba(100,170,210,0.25);
            border-color: #a8d4eb;
        }
        * { Segoe UI', -apple-system, BlinkMacSystemFont, Roboto, sans-serif; }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(16px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes shimmer {
            0% { background-position: -200% center; }
            100% { background-position: 200% center; }
        }
        

        .tab-content { display: none; }
        .tab-content.active { display: block; animation: fadeUp 0.4s ease-out; }
        .tab-btn { transition: all 0.25s ease; position: relative; }
        .tab-btn.active {
            background: linear-gradient(135deg, #1e293b, #334155);
            color: white;
            box-shadow: 0 4px 15px rgba(30,41,59,0.3);
            transform: translateY(-1px);
        }
        .tab-btn:not(.active):hover {
            background: #f1f5f9;
            transform: translateY(-1px);
        }

        .strategi-card {
            background: #dceef8;
            border-radius: 1.25rem;
            padding: 1.5rem;
            border: 1px solid #f1f5f9;
            box-shadow: 0 1px 4px rgba(0,0,0,0.05);
            transition: all 0.25s ease;
            position: relative;
            overflow: hidden;
        }
        .strategi-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 3px;
            background: linear-gradient(90deg, #38bdf8, #818cf8);
            opacity: 0;
            transition: opacity 0.25s;
        }
        .strategi-card:hover { box-shadow: 0 8px 24px rgba(0,0,0,0.09); transform: translateY(-2px); }
        .strategi-card:hover::before { opacity: 1; }

        .artikel-card {
            background: #dceef8;
            border: 1px solid #e2e8f0;
            border-radius: 1.25rem;
            padding: 1.5rem;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
            transition: all 0.25s ease;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }
        .artikel-card:hover {
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transform: translateY(-3px);
            border-color: #cbd5e1;
        }
        .artikel-badge {
            display: inline-block;
            font-size: 0.68rem;
            font-weight: 700;
            letter-spacing: 0.06em;
            padding: 3px 12px;
            border-radius: 999px;
            text-transform: uppercase;
        }
        .artikel-card h5 { font-size: 0.975rem; font-weight: 700; color: #0f172a; line-height: 1.4; }
        .artikel-card p  { font-size: 0.845rem; color: #64748b; line-height: 1.65; flex: 1; }
        .artikel-card .meta { font-size: 0.72rem; color: #94a3b8; display: flex; align-items: center; gap: 5px; margin-top: auto; padding-top: 0.75rem; border-top: 1px solid #f1f5f9; }

        .tahap-card {
            background: #dceef8;
            border-radius: 1.25rem;
            padding: 1.5rem;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
            border: 1px solid #f8fafc;
            transition: all 0.25s ease;
            position: relative;
            overflow: hidden;
        }
        .tahap-card:hover { transform: translateY(-3px); box-shadow: 0 12px 28px rgba(0,0,0,0.1); }
        .tahap-number {
            font-size: 2.5rem;
            font-weight: 800;
            line-height: 1;
            margin-bottom: 0.75rem;
        }

        .artikel-divider {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin: 2.5rem 0;
        }
        .artikel-divider .line { flex: 1; height: 1px; background: linear-gradient(90deg, transparent, #e2e8f0, transparent); }
        .artikel-divider .label {
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: #94a3b8;
            white-space: nowrap;
            background: #f0f7fb;
            padding: 6px 16px;
            border-radius: 999px;
            border: 1px solid #e2e8f0;
        }

        .section-eyebrow {
            font-size: 0.72rem;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: #94a3b8;
            margin-bottom: 0.5rem;
        }

        .dampak-card {
            background: #dceef8;
            border-radius: 1.25rem;
            padding: 2rem;
            border: 1px solid #f1f5f9;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }
        .dampak-card li { 
            display: flex; align-items: flex-start; gap: 0.6rem;
            font-size: 0.9rem; color: #475569; padding: 0.4rem 0;
            border-bottom: 1px solid #f8fafc;
        }
        .dampak-card li:last-child { border-bottom: none; }
        .dampak-card li::before { content: ''; flex-shrink: 0; width: 6px; height: 6px; border-radius: 50%; margin-top: 0.45rem; }
        .dampak-pendek li::before { background: #0b9ff5; }
        .dampak-panjang li::before { background: #ef4444; }

        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity .8s ease, transform .8s ease;
        }
        .reveal-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: opacity .8s ease, transform .8s ease;
        }
        .reveal-right {
            opacity: 0;
            transform: translateX(50px);
            transition: opacity .8s ease, transform .8s ease;
        }
        .reveal-scale {
            opacity: 0;
            transform: scale(.9);
            transition: opacity .8s ease, transform .8s ease;
        }
        .reveal.show,
        .reveal-left.show,
        .reveal-right.show,
        .reveal-scale.show {
            opacity: 1;
            transform: translate(0,0) scale(1);
        }
    </style>
</head>
<body class="pb-24" style="background: #24495e;">

    <!-- HEADER — card navbar sejajar dengan konten, seperti artikel.php -->
    <header>
        <div class="header-inner">
            <div class="logo"><a href="index.php">❀ BinaRuang.id</a></div>
            <nav>
                <a href="index.php">Beranda</a>
                <a href="apa-itu.php" class="active">Apa itu Grooming?</a>
                <a href="artikel.php">Artikel</a>
                <a href="video-edukasi.php">Video Edukasi</a>
                <a href="tentang-kami.php">Tentang Kami</a>
            </nav>
        </div>
    </header>
    <main class="max-w-5xl mx-auto px-6 py-12 space-y-20">

        <!-- HERO -->
        <section class="relative rounded-3xl overflow-hidden" style="background:#dceef8; border:1px solid #b8daf0;">
            <div class="absolute top-0 right-0 w-64 h-64 rounded-full opacity-20" style="background: radial-gradient(circle, #0b9ff5, transparent); transform: translate(30%, -30%);"></div>
            <div class="relative flex flex-col md:flex-row items-center gap-10 p-10">
                <div class="relative flex-shrink-0">
                    <div class="absolute inset-0 rounded-2xl" style="background: linear-gradient(135deg, #0c7da0, #0680f1); transform: rotate(3deg);"></div>
                    <img src="grooming.webp" alt="Ilustrasi" class="relative w-64 h-64 object-cover rounded-2xl border-4 border-white shadow-xl">
                </div>
                <div class="flex-1">
                    <p class="section-eyebrow" style="color: #85807d;">📚 Panduan Lengkap</p>
                    <h1 class="text-4xl font-extrabold mb-4 leading-tight" style="color: #01113b;">Apa itu<br><span style="color: #01113b;">Child Grooming?</span></h1>
                    <p class="text-base leading-relaxed text-amber-900/70 max-w-lg">Child grooming merupakan bentuk kejahatan seksual terhadap anak yang dilakukan orang dewasa melalui proses bertahap dan manipulatif. Pelaku membangun kedekatan emosional agar anak sulit mengenali bahwa dirinya sedang dieksploitasi.</p>
                    <div class="mt-6 flex gap-4">
                        <div class="text-center bg-white/60 backdrop-blur rounded-xl px-5 py-3 border border-amber-200">
                            <p class="text-2xl font-extrabold text-amber-700">6</p>
                            <p class="text-xs text-amber-600 font-semibold">Tahapan</p>
                        </div>
                        <div class="text-center bg-white/60 backdrop-blur rounded-xl px-5 py-3 border border-amber-200">
                            <p class="text-2xl font-extrabold text-amber-700">4</p>
                            <p class="text-xs text-amber-600 font-semibold">Strategi</p>
                        </div>
                        <div class="text-center bg-white/60 backdrop-blur rounded-xl px-5 py-3 border border-amber-200">
                            <p class="text-2xl font-extrabold text-amber-700">24</p>
                            <p class="text-xs text-amber-600 font-semibold">Artikel</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 6 TAHAPAN -->
        <section>
            <p class="section-eyebrow">🔍 Kenali Polanya</p>
            <h2 class="text-3xl font-extrabold text-[#ffffff] mb-2">Proses & Pola</h2>
            <p class="text-[#ffffff] mb-8 text-sm">Grooming terjadi melalui 6 tahapan yang berlangsung bertahap dan tersembunyi.</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <div class="tahap-card" style="border-top: 4px solid #38bdf8;">
                    <p class="tahap-number" style="color: #01113b;">01</p>
                    <h4 class="font-bold text-slate-800 mb-1">Pemilihan Target</h4>
                    <p class="text-sm text-slate-500">Mengidentifikasi anak yang rentan secara psikologis  biasanya anak yang kesepian atau kurang perhatian.</p>
                </div>
                <div class="tahap-card" style="border-top: 4px solid #a78bfa;">
                    <p class="tahap-number" style="color: #01113b;">02</p>
                    <h4 class="font-bold text-slate-800 mb-1">Membangun Kepercayaan</h4>    
                    <p class="text-sm text-slate-500">Pelaku berpura-pura menjadi teman sebaya yang memahami dan tidak menghakimi.</p>
                </div>
                <div class="tahap-card" style="border-top: 4px solid #34d399;">
                    <p class="tahap-number" style="color: #01113b;">03</p>
                    <h4 class="font-bold text-slate-800 mb-1">Isolasi</h4>
                    <p class="text-sm text-slate-500">Memisahkan korban dari jaringan dukungan keluarga dan teman-teman terdekat.</p>
                </div>
                <div class="tahap-card" style="border-top: 4px solid #fbbf24;">
                    <p class="tahap-number" style="color: #01113b;">04</p>
                    <h4 class="font-bold text-slate-800 mb-1">Desensitisasi</h4>
                    <p class="text-sm text-slate-500">Memperkenalkan konten seksual secara perlahan hingga tampak normal bagi korban.</p>
                </div>
                <div class="tahap-card" style="border-top: 4px solid #f87171;">
                    <p class="tahap-number" style="color: #01113b;">05</p>
                    <h4 class="font-bold text-slate-800 mb-1">Eksploitasi</h4>
                    <p class="text-sm text-slate-500">Tahap realisasi niat jahat pelaku setelah korban cukup dimanipulasi.</p>
                </div>
                <div class="tahap-card" style="border-top: 4px solid #fb923c;">
                    <p class="tahap-number" style="color: #01113b;">06</p>
                    <h4 class="font-bold text-slate-800 mb-1">Kontrol</h4>
                    <p class="text-sm text-slate-500">Mempertahankan kendali melalui ancaman, rasa malu, atau ketergantungan emosional.</p>
                </div>
            </div>
        </section>

        <!-- DAMPAK PSIKOLOGIS -->
        <section>
            <p class="section-eyebrow">🧠 Efek Jangka Panjang</p>
            <h2 class="text-3xl font-extrabold text-[#ffffff] mb-2">Dampak Psikologis</h2>
            <p class="text-[#ffffff] mb-8 text-sm">Luka yang ditinggalkan grooming tidak selalu terlihat, namun dampaknya bisa berlangsung seumur hidup.</p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="dampak-card dampak-pendek">
                    <div class="flex items-center gap-3 mb-5">
                        <div class="w-10 h-10 rounded-xl flex items-center justify-center text-lg" style="background: #fef3c7;">⚡</div>
                        <div>
                            <p class="text-xs font-bold text-amber-500 uppercase tracking-wider">Segera Terasa</p>
                            <h4 class="font-bold text-slate-800">Dampak Jangka Pendek</h4>
                        </div>
                    </div>
                    <ul class="space-y-1">
                        <li>Shock dan kebingungan emosional yang mendalam.</li>
                        <li>Rasa bersalah yang tidak pada tempatnya.</li>
                        <li>Penurunan prestasi akademik secara tiba-tiba.</li>
                    </ul>
                </div>
                <div class="dampak-card dampak-panjang">
                    <div class="flex items-center gap-3 mb-5">
                        <div class="w-10 h-10 rounded-xl flex items-center justify-center text-lg" style="background: #fee2e2;">🔴</div>
                        <div>
                            <p class="text-xs font-bold text-red-500 uppercase tracking-wider">Bertahan Lama</p>
                            <h4 class="font-bold text-slate-800">Dampak Jangka Panjang</h4>
                        </div>
                    </div>
                    <ul class="space-y-1">
                        <li>Kesulitan serius dalam membangun kepercayaan.</li>
                        <li>Masalah identitas dan disfungsi dalam relasi.</li>
                        <li>Risiko ketergantungan atau penyalahgunaan zat.</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- STRATEGI PENCEGAHAN + TAB -->
        <section>
            <p class="section-eyebrow">🛡️ Lindungi Bersama</p>
            <h2 class="text-3xl font-extrabold text-[#ffffff] mb-2">Strategi Pencegahan</h2>
            <p class="text-slate-500 mb-8 text-sm">Pilih peran Anda dan temukan langkah konkret yang bisa dilakukan sekarang.</p>

            <div class="flex gap-2 mb-8 overflow-x-auto pb-1 scrollbar-hide">
                <button onclick="openTab(event, 'orangtua')" class="tab-btn active flex items-center gap-2 px-5 py-2.5 rounded-xl border border-slate-200 font-semibold bg-white text-sm whitespace-nowrap">
                    <span>👨‍👩‍👧</span> Orang Tua
                </button>
                <button onclick="openTab(event, 'mahasiswa')" class="tab-btn flex items-center gap-2 px-5 py-2.5 rounded-xl border border-slate-200 font-semibold bg-white text-sm whitespace-nowrap">
                    <span>🎓</span> Mahasiswa
                </button>
                <button onclick="openTab(event, 'lembaga')" class="tab-btn flex items-center gap-2 px-5 py-2.5 rounded-xl border border-slate-200 font-semibold bg-white text-sm whitespace-nowrap">
                    <span>🏛️</span> Lembaga
                </button>
                <button onclick="openTab(event, 'digital')" class="tab-btn flex items-center gap-2 px-5 py-2.5 rounded-xl border border-slate-200 font-semibold bg-white text-sm whitespace-nowrap">
                    <span>🔒</span> Keamanan Digital
                </button>
            </div>

            <!-- TAB 1: ORANG TUA -->
            <div id="orangtua" class="tab-content active">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="strategi-card"><div class="w-9 h-9 rounded-lg flex items-center justify-center text-base mb-3" style="background:#eff6ff;">💬</div><h4 class="font-bold text-slate-800 mb-1">Bangun Komunikasi Terbuka</h4><p class="text-sm text-slate-500">Ciptakan suasana di mana anak merasa aman untuk berbicara tentang apapun tanpa takut dihakimi.</p></div>
                    <div class="strategi-card"><div class="w-9 h-9 rounded-lg flex items-center justify-center text-base mb-3" style="background:#f0fdf4;">🛡️</div><h4 class="font-bold text-slate-800 mb-1">Ajarkan "Tubuhku Milikku"</h4><p class="text-sm text-slate-500">Kenalkan batasan tubuh sejak dini agar anak tahu bahwa mereka berhak menolak siapa pun.</p></div>
                    <div class="strategi-card"><div class="w-9 h-9 rounded-lg flex items-center justify-center text-base mb-3" style="background:#faf5ff;">📱</div><h4 class="font-bold text-slate-800 mb-1">Pantau Aktivitas Online</h4><p class="text-sm text-slate-500">Gunakan parental control sebagai jaring pengaman, bukan alat kontrol total yang membatasi kepercayaan.</p></div>
                    <div class="strategi-card"><div class="w-9 h-9 rounded-lg flex items-center justify-center text-base mb-3" style="background:#fff7ed;">👀</div><h4 class="font-bold text-slate-800 mb-1">Kenali Lingkungan Anak</h4><p class="text-sm text-slate-500">Waspadai orang dewasa yang tampak terlalu spesial atau ingin menghabiskan waktu berdua dengan anak.</p></div>
                    <div class="strategi-card"><div class="w-9 h-9 rounded-lg flex items-center justify-center text-base mb-3" style="background:#fef2f2;">🚫</div><h4 class="font-bold text-slate-800 mb-1">Hapus "Budaya Rahasia"</h4><p class="text-sm text-slate-500">Bedakan antara 'kejutan' yang menyenangkan dengan 'rahasia' yang membuat anak tidak nyaman.</p></div>
                    <div class="strategi-card"><div class="w-9 h-9 rounded-lg flex items-center justify-center text-base mb-3" style="background:#f0fdfa;">💡</div><h4 class="font-bold text-slate-800 mb-1">Percayai Insting Anak</h4><p class="text-sm text-slate-500">Dukung anak jika merasa tidak nyaman dengan seseorang, meski orang tersebut adalah keluarga dekat.</p></div>
                </div>
            </div>

            <!-- TAB 2: MAHASISWA -->
            <div id="mahasiswa" class="tab-content">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-2">
                    <div class="strategi-card"><div class="w-9 h-9 rounded-lg flex items-center justify-center text-base mb-3" style="background:#eff6ff;">🎤</div><h4 class="font-bold text-slate-800 mb-1">Jadilah Peer Educator</h4><p class="text-sm text-slate-500">Gunakan pengetahuanmu untuk mendidik teman, adik, atau komunitas. Mahasiswa adalah agen perubahan paling efektif.</p></div>
                    <div class="strategi-card"><div class="w-9 h-9 rounded-lg flex items-center justify-center text-base mb-3" style="background:#fef2f2;">🔍</div><h4 class="font-bold text-slate-800 mb-1">Kenali Tanda pada Anak Sekitar</h4><p class="text-sm text-slate-500">Perhatikan perubahan perilaku pada adik atau anak di lingkunganmu. Jangan tunda bertindak jika ada yang mencurigakan.</p></div>
                    <div class="strategi-card"><div class="w-9 h-9 rounded-lg flex items-center justify-center text-base mb-3" style="background:#f0fdf4;">📲</div><h4 class="font-bold text-slate-800 mb-1">Gunakan Platform Digitalmu</h4><p class="text-sm text-slate-500">Sebarkan informasi di media sosial. Konten edukasi dari mahasiswa lebih mudah diterima anak muda dibanding konten formal.</p></div>
                    <div class="strategi-card"><div class="w-9 h-9 rounded-lg flex items-center justify-center text-base mb-3" style="background:#faf5ff;">🏫</div><h4 class="font-bold text-slate-800 mb-1">Inisiasi Program Kampus</h4><p class="text-sm text-slate-500">Dorong kampusmu memiliki mekanisme pengaduan, pelatihan perlindungan anak, dan kebijakan zero-tolerance pelecehan.</p></div>
                    <div class="strategi-card"><div class="w-9 h-9 rounded-lg flex items-center justify-center text-base mb-3" style="background:#fff7ed;">🤝</div><h4 class="font-bold text-slate-800 mb-1">Bantu Korban Melapor</h4><p class="text-sm text-slate-500">Jika seseorang bercerita, percayai mereka dan bantu mengakses layanan profesional. Jangan tangani sendiri.</p></div>
                    <div class="strategi-card"><div class="w-9 h-9 rounded-lg flex items-center justify-center text-base mb-3" style="background:#f0fdfa;">⚖️</div><h4 class="font-bold text-slate-800 mb-1">Pelajari Kerangka Hukum</h4><p class="text-sm text-slate-500">Pahami UU Perlindungan Anak & UU TPKS No. 12/2022 agar bisa memberi informasi yang akurat kepada yang membutuhkan.</p></div>
                </div>
                <div class="artikel-divider"><div class="line"></div><div class="label">📰 Artikel untuk Mahasiswa</div><div class="line"></div></div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="artikel-card"><span class="artikel-badge" style="background:#dbeafe;color:#1d4ed8;">Edukasi</span><h5>Mahasiswa sebagai Garda Terdepan Perlindungan Anak</h5><p>Mahasiswa memiliki posisi strategis — dekat dengan dunia anak sekaligus memahami dinamika digital.</p><div class="meta"><svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>5 menit baca</div></div>
                    <div class="artikel-card"><span class="artikel-badge" style="background:#fef3c7;color:#b45309;">Kesadaran</span><h5>Mengenali Red Flag Child Grooming di Era Digital</h5><p>Di era media sosial, pelaku grooming semakin mudah menjangkau korban melalui game online, DM Instagram, dan grup WhatsApp.</p><div class="meta"><svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>6 menit baca</div></div>
                    <div class="artikel-card"><span class="artikel-badge" style="background:#d1fae5;color:#065f46;">Aksi Nyata</span><h5>Cara Melaporkan Kasus Kekerasan Seksual pada Anak</h5><p>Panduan langkah pelaporan ke SIMFONI PPA (Kemenpppa), SAPA 129, hingga Komnas Perlindungan Anak secara tepat dan aman.</p><div class="meta"><svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>4 menit baca</div></div>
                    <div class="artikel-card"><span class="artikel-badge" style="background:#ede9fe;color:#5b21b6;">Hukum</span><h5>UU TPKS No. 12/2022: Apa yang Harus Diketahui Mahasiswa?</h5><p>UU TPKS mencakup eksploitasi dan grooming anak. Mahasiswa yang memahaminya bisa menjadi konselor informal yang akurat.</p><div class="meta"><svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>7 menit baca</div></div>
                    <div class="artikel-card"><span class="artikel-badge" style="background:#fee2e2;color:#991b1b;">Psikologi</span><h5>Trauma Grooming dan Mengapa Korban Sering Tidak Menyadarinya</h5><p>Mekanisme di balik manipulation cycle, rasa malu, dan trauma bonding — pengetahuan penting agar mahasiswa bisa bersikap empati.</p><div class="meta"><svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>8 menit baca</div></div>
                    <div class="artikel-card"><span class="artikel-badge" style="background:#ffedd5;color:#9a3412;">Komunitas</span><h5>Membuat Program Edukasi Anti-Grooming di Kampus</h5><p>Panduan praktis menginisiasi seminar, workshop, atau kampanye media sosial di kampus — mulai membangun tim hingga mengukur dampak.</p><div class="meta"><svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>6 menit baca</div></div>
                </div>
            </div>

            <!-- TAB 3: LEMBAGA -->
            <div id="lembaga" class="tab-content">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-2">
                    <div class="strategi-card"><div class="w-9 h-9 rounded-lg flex items-center justify-center text-base mb-3" style="background:#eff6ff;">📋</div><h4 class="font-bold text-slate-800 mb-1">Buat Child Safeguarding Policy</h4><p class="text-sm text-slate-500">Setiap lembaga yang bekerja dengan anak wajib memiliki kebijakan tertulis jelas tentang perilaku yang diizinkan dan prosedur penanganan insiden.</p></div>
                    <div class="strategi-card"><div class="w-9 h-9 rounded-lg flex items-center justify-center text-base mb-3" style="background:#fef2f2;">🔎</div><h4 class="font-bold text-slate-800 mb-1">Lakukan Background Check Staf</h4><p class="text-sm text-slate-500">Periksa rekam jejak calon staf atau relawan. SKCK dan referensi terverifikasi adalah standar minimum yang harus dipenuhi.</p></div>
                    <div class="strategi-card"><div class="w-9 h-9 rounded-lg flex items-center justify-center text-base mb-3" style="background:#f0fdf4;">🎯</div><h4 class="font-bold text-slate-800 mb-1">Pelatihan Wajib Seluruh Staf</h4><p class="text-sm text-slate-500">Seluruh staf wajib memahami tanda-tanda grooming dan prosedur pelaporan. Ini bukan pilihan, melainkan kewajiban lembaga.</p></div>
                    <div class="strategi-card"><div class="w-9 h-9 rounded-lg flex items-center justify-center text-base mb-3" style="background:#faf5ff;">📢</div><h4 class="font-bold text-slate-800 mb-1">Mekanisme Pelaporan yang Aman</h4><p class="text-sm text-slate-500">Sediakan saluran pengaduan yang aman, rahasia, dan mudah diakses anak dan keluarga. Didampingi profesional terlatih.</p></div>
                </div>
                <div class="artikel-divider"><div class="line"></div><div class="label">📰 Artikel untuk Lembaga</div><div class="line"></div></div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="artikel-card"><span class="artikel-badge" style="background:#dbeafe;color:#1d4ed8;">Kebijakan</span><h5>Menyusun Child Safeguarding Policy yang Efektif</h5><p>Kebijakan perlindungan anak bukan sekadar formalitas. Panduan merancang kebijakan operasional — kode etik staf, prosedur pelaporan, dan evaluasi berkala.</p><div class="meta"><svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>7 menit baca</div></div>
                    <div class="artikel-card"><span class="artikel-badge" style="background:#fef3c7;color:#b45309;">SDM</span><h5>Standar Background Check untuk Staf yang Bekerja dengan Anak</h5><p>Rekrutmen ceroboh adalah celah terbesar masuknya pelaku grooming. Tahapan verifikasi — dari SKCK, pengecekan referensi, hingga wawancara berbasis perilaku.</p><div class="meta"><svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>6 menit baca</div></div>
                    <div class="artikel-card"><span class="artikel-badge" style="background:#d1fae5;color:#065f46;">Pelatihan</span><h5>Modul Pelatihan Anti-Grooming untuk Staf Lembaga</h5><p>Pelatihan efektif bukan hanya teori — staf perlu berlatih mengenali situasi nyata. Komponen wajib: studi kasus, simulasi respons, dan evaluasi kompetensi.</p><div class="meta"><svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>8 menit baca</div></div>
                    <div class="artikel-card"><span class="artikel-badge" style="background:#ede9fe;color:#5b21b6;">Hukum</span><h5>Kewajiban Hukum Lembaga dalam Kasus Kekerasan Seksual Anak</h5><p>UU TPKS No. 12/2022 mewajibkan lembaga melapor jika mengetahui indikasi kekerasan. Konsekuensi hukum jika lembaga gagal bertindak.</p><div class="meta"><svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>9 menit baca</div></div>
                    <div class="artikel-card"><span class="artikel-badge" style="background:#fee2e2;color:#991b1b;">Penanganan</span><h5>Protokol Penanganan saat Anak Mengungkapkan Kekerasan</h5><p>Respons pertama staf sangat menentukan proses pemulihan korban. Panduan mendengarkan tanpa menghakimi dan merujuk ke layanan profesional.</p><div class="meta"><svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>7 menit baca</div></div>
                    <div class="artikel-card"><span class="artikel-badge" style="background:#ffedd5;color:#9a3412;">Budaya Organisasi</span><h5>Membangun Budaya Zero-Tolerance di Lingkungan Lembaga</h5><p>Kebijakan tertulis tidak cukup tanpa budaya organisasi yang mendukung. Cara pemimpin membangun lingkungan aman di mana staf berani melapor.</p><div class="meta"><svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>6 menit baca</div></div>
                </div>
            </div>

            <!-- TAB 4: KEAMANAN DIGITAL -->
            <div id="digital" class="tab-content">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-2">
                    <div class="strategi-card"><div class="w-9 h-9 rounded-lg flex items-center justify-center text-base mb-3" style="background:#eff6ff;">🔐</div><h4 class="font-bold text-slate-800 mb-1">Atur Privasi Akun dengan Ketat</h4><p class="text-sm text-slate-500">Gunakan pengaturan privasi tertinggi di semua platform. Batasi siapa yang bisa melihat profil, foto, dan lokasi. Review berkala karena kebijakan platform bisa berubah.</p></div>
                    <div class="strategi-card"><div class="w-9 h-9 rounded-lg flex items-center justify-center text-base mb-3" style="background:#fef2f2;">🚷</div><h4 class="font-bold text-slate-800 mb-1">Jangan Temui Online Stranger</h4><p class="text-sm text-slate-500">Tegaskan aturan: tidak bertemu secara fisik dengan orang yang hanya dikenal online tanpa izin dan didampingi orang dewasa terpercaya.</p></div>
                    <div class="strategi-card"><div class="w-9 h-9 rounded-lg flex items-center justify-center text-base mb-3" style="background:#f0fdf4;">🖼️</div><h4 class="font-bold text-slate-800 mb-1">Amankan Identitas Visual</h4><p class="text-sm text-slate-500">Jangan posting foto wajah anak secara publik, terutama di lokasi yang bisa diidentifikasi. Pelaku online mengumpulkan informasi dari foto.</p></div>
                    <div class="strategi-card"><div class="w-9 h-9 rounded-lg flex items-center justify-center text-base mb-3" style="background:#faf5ff;">🤖</div><h4 class="font-bold text-slate-800 mb-1">Waspadai AI Grooming</h4><p class="text-sm text-slate-500">Pelaku kini menggunakan deepfake dan AI chatbot. Ajarkan anak skeptis terhadap orang yang terlalu "sempurna" atau selalu menyenangkan online.</p></div>
                    <div class="strategi-card"><div class="w-9 h-9 rounded-lg flex items-center justify-center text-base mb-3" style="background:#fff7ed;">⚠️</div><h4 class="font-bold text-slate-800 mb-1">Kenali Red Flag Online</h4><p class="text-sm text-slate-500">Tanda bahaya: meminta foto, mengirim hadiah, meminta rahasiakan percakapan, meminta lokasi, atau cepat "jatuh cinta" dan terlalu perhatian.</p></div>
                    <div class="strategi-card"><div class="w-9 h-9 rounded-lg flex items-center justify-center text-base mb-3" style="background:#f0fdfa;">🚫</div><h4 class="font-bold text-slate-800 mb-1">Blokir & Laporkan Tanpa Ragu</h4><p class="text-sm text-slate-500">Memblokir yang membuat tidak nyaman adalah hak, bukan tindakan kasar. Gunakan fitur pelaporan platform jika ada perilaku mencurigakan.</p></div>
                </div>
                <div class="artikel-divider"><div class="line"></div><div class="label">📰 Artikel Keamanan Digital</div><div class="line"></div></div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="artikel-card"><span class="artikel-badge" style="background:#dbeafe;color:#1d4ed8;">Privasi</span><h5>Panduan Lengkap Pengaturan Privasi Akun Anak di Media Sosial</h5><p>Instagram, TikTok, YouTube, hingga game online memiliki celah privasi berbeda. Panduan langkah demi langkah mengunci akun anak dari jangkauan orang asing.</p><div class="meta"><svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>6 menit baca</div></div>
                    <div class="artikel-card"><span class="artikel-badge" style="background:#fef3c7;color:#b45309;">Ancaman Baru</span><h5>AI Grooming: Ancaman Lebih Canggih dari Grooming Konvensional</h5><p>Deepfake, AI chatbot peniru suara dan wajah kini jadi senjata baru pelaku grooming. Cara kerja teknologi ini dan bagaimana mengenali jebakannya.</p><div class="meta"><svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>8 menit baca</div></div>
                    <div class="artikel-card"><span class="artikel-badge" style="background:#d1fae5;color:#065f46;">Parental Control</span><h5>Aplikasi Parental Control Terbaik 2024: Mana yang Efektif?</h5><p>Perbandingan fitur utama — pemblokiran konten, pemantauan percakapan, pembatasan waktu layar — dan rekomendasi pilihan terbaik sesuai kelompok usia anak.</p><div class="meta"><svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>7 menit baca</div></div>
                    <div class="artikel-card"><span class="artikel-badge" style="background:#ede9fe;color:#5b21b6;">Literasi Digital</span><h5>Cara Mengajarkan Anak Mengenali Red Flag di Dunia Online</h5><p>Anak perlu dibekali kemampuan berpikir kritis — bukan sekadar dilarang berinternet. Panduan percakapan yang bisa dilakukan orang tua bersama anak.</p><div class="meta"><svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>6 menit baca</div></div>
                    <div class="artikel-card"><span class="artikel-badge" style="background:#fee2e2;color:#991b1b;">Keamanan Game</span><h5>Bahaya di Balik Game Online: Grooming Lewat Fitur Chat</h5><p>Roblox, Free Fire, Minecraft — fitur chat game ini sering jadi pintu masuk pelaku grooming. Modus umum yang digunakan dan pengaturan keamanan wajib diaktifkan.</p><div class="meta"><svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>7 menit baca</div></div>
                    <div class="artikel-card"><span class="artikel-badge" style="background:#ffedd5;color:#9a3412;">Tindakan</span><h5>Cara Melaporkan Akun & Konten Mencurigakan di Platform Digital</h5><p>Panduan melaporkan akun berbahaya di Instagram, TikTok, WhatsApp, dan YouTube — termasuk cara menyimpan bukti digital yang valid secara hukum.</p><div class="meta"><svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>5 menit baca</div></div>
                </div>
            </div>

        </section>
    </main>

    <script>
        function openTab(evt, tabName) {
            document.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));
            document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
            document.getElementById(tabName).classList.add('active');
            evt.currentTarget.classList.add('active');
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.tahap-card, .strategi-card, .artikel-card, .dampak-card');
            cards.forEach((card, index) => {
                if (index % 4 === 0) card.classList.add('reveal-left');
                else if (index % 4 === 1) card.classList.add('reveal-right');
                else if (index % 4 === 2) card.classList.add('reveal-scale');
                else card.classList.add('reveal');
            });
            function revealElements() {
                const triggerBottom = window.innerHeight * 0.85;
                cards.forEach(card => {
                    const top = card.getBoundingClientRect().top;
                    const bottom = card.getBoundingClientRect().bottom;
                    if (top < triggerBottom && bottom > 0) card.classList.add('show');
                    else card.classList.remove('show');
                });
            }
            window.addEventListener('scroll', revealElements);
            revealElements();
        });
    </script>
</body>
</html>