<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BinaRuang - Edukasi & Perlindungan Remaja</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', -apple-system, BlinkMacSystemFont, Roboto, sans-serif; }

        body {
            background: #24495e;
            min-height: 100vh;
            color: #2c4a5a;
            line-height: 1.6;
            overflow-x: hidden;
        }

        a { text-decoration: none; color: inherit; }
        .container { max-width: 1140px; margin: 0 auto; padding: 0 24px 64px; }

        /* ===== HEADER ===== */
        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 14px 28px;
            background: #c8e6f5;
            position: sticky;
            top: 0;
            z-index: 50;
            border-radius: 0 0 16px 16px;
            border-bottom: 1px solid #a8d4eb;
            box-shadow: 0 2px 12px rgba(100,170,210,0.15);
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
            transition: color 0.2s ease, background-color 0.2s ease, border-color 0.2s ease;
            white-space: nowrap;
        }
        nav a:hover {
            color: #1e5570;
            background-color: rgba(100,170,210,0.2);
            border-color: #a8d4eb;
        }
        nav a.active {
            color: #1e5570;
            background-color: rgba(100,170,210,0.25);
            border-color: #8ec8e3;
        }
        nav a.nav-kuis {
            color: #3a7a9c;
            background-color: rgba(100,170,210,0.15);
            border-color: #a8d4eb;
        }
        nav a.nav-kuis:hover {
            background-color: rgba(100,170,210,0.25);
            color: #1e5570;
        }

        /* ===== HERO ===== */
        .hero {
            background: #dceef8;
            padding: 48px;
            border-radius: 24px;
            margin-top: 32px;
            border: 1px solid #b8daf0;
            display: flex;
            align-items: center;
            gap: 48px;
            box-shadow: 0 4px 18px rgba(100,170,210,0.12);
        }
        .hero-image-container {
            flex: 1; max-width: 38%;
            display: flex; justify-content: center; align-items: center;
        }
        .hero-image-container img {
            width: 100%; max-height: 280px;
            border-radius: 20px; object-fit: contain;
            background-color: #ffffff; padding: 24px;
            border: 1px solid #cde7f5;
            box-shadow: 0 8px 20px rgba(100,170,210,0.15);
        }
        .hero-text { flex: 1.2; }
        .hero-text-dynamic-wrapper {
            transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
            opacity: 1; transform: translateY(0);
        }
        .hero-text-dynamic-wrapper.fade-out {
            opacity: 0; transform: translateY(-12px);
        }
        .hero-subtitle {
            color: #2a6480; font-size: 13px; font-weight: 700;
            margin-bottom: 12px; text-transform: uppercase; letter-spacing: 1.5px;
            display: inline-block; background: rgba(100,170,210,0.25);
            padding: 6px 14px; border-radius: 6px;
        }
        .hero h1 { font-size: 34px; font-weight: 800; color: #1e4f65; margin-bottom: 16px; line-height: 1.25; letter-spacing: -0.5px; }
        .hero p { font-size: 16px; color: #3d6e85; text-align: justify; font-weight: 500; }

        /* ===== STATISTICS SECTION ===== */
        .stats-section {
            margin-top: 48px; padding: 56px 32px;
            background: #e4f2fa;
            border-radius: 24px; border: 1px solid #b8d9ef;
            position: relative; overflow: hidden;
            box-shadow: 0 4px 16px rgba(100,170,210,0.1);
        }
        .stats-section::before {
            content: ''; position: absolute; top: -80px; left: -80px;
            width: 300px; height: 300px;
            background: radial-gradient(circle, rgba(200,230,248,0.5) 0%, transparent 70%);
            border-radius: 50%; pointer-events: none;
        }
        .stats-section::after {
            content: ''; position: absolute; bottom: -80px; right: -80px;
            width: 350px; height: 350px;
            background: radial-gradient(circle, rgba(200,230,248,0.4) 0%, transparent 70%);
            border-radius: 50%; pointer-events: none;
        }
        .stats-header { text-align: center; margin-bottom: 40px; position: relative; z-index: 1; }
        .stats-header .eyebrow {
            display: inline-flex; align-items: center; gap: 8px;
            font-size: 12px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase;
            color: #2a6480; background: rgba(100,170,210,0.2);
            border: 1px solid #a8d4eb;
            padding: 6px 16px; border-radius: 20px; margin-bottom: 16px;
        }
        .stats-header h2 { font-size: 28px; font-weight: 800; color: #1e4f65; line-height: 1.3; margin-bottom: 10px; }
        .stats-header h2 span { color: #3a7a9c; }
        .stats-header p { color: #4d7d95; font-size: 14px; }

        .stats-grid {
            display: grid; grid-template-columns: repeat(2, 1fr);
            gap: 20px; position: relative; z-index: 1; margin-bottom: 24px;
        }
        .stat-card {
            background: #ffffff; border-radius: 20px; padding: 28px 24px;
            border: 1px solid #c5e2f2; display: flex; flex-direction: column; gap: 12px;
            position: relative; overflow: hidden;
            transition: transform 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
            opacity: 0; transform: translateY(30px);
        }
        .stat-card.stat-visible { animation: statFadeUp 0.6s ease forwards; }
        @keyframes statFadeUp { to { opacity: 1; transform: translateY(0); } }
        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 24px rgba(100,170,210,0.18);
            border-color: #8ec8e3;
        }

        .stat-card.cyan  { border-color: #b8d9ef; }
        .stat-card.cyan .stat-icon-bg  { background: #d8eef8; color: #2a6480; }
        .stat-card.cyan .stat-number   { color: #1e5570; }

        .stat-card.violet { border-color: #b8d9ef; }
        .stat-card.violet .stat-icon-bg { background: #dce8f5; color: #2a5a7a; }
        .stat-card.violet .stat-number  { color: #1e4d70; }

        .stat-card.amber  { border-color: #b8d9ef; }
        .stat-card.amber .stat-icon-bg  { background: #dff0f8; color: #2a6480; }
        .stat-card.amber .stat-number   { color: #1e5070; }

        .stat-card.rose   { border-color: #b8d9ef; }
        .stat-card.rose .stat-icon-bg   { background: #d5e8f5; color: #2a5878; }
        .stat-card.rose .stat-number    { color: #1e4f68; }

        .stat-top { display: flex; align-items: flex-start; gap: 16px; }
        .stat-icon-bg {
            width: 52px; height: 52px; border-radius: 14px;
            display: flex; align-items: center; justify-content: center;
            font-size: 24px; flex-shrink: 0;
        }
        .stat-number-block { display: flex; flex-direction: column; }
        .stat-number { font-size: 44px; font-weight: 900; line-height: 1; letter-spacing: -1px; }
        .stat-label  { font-size: 14px; font-weight: 700; color: #2c5a72; margin-top: 4px; line-height: 1.3; }
        .stat-desc   { font-size: 13px; color: #4d7d95; line-height: 1.6; border-top: 1px solid #d0e8f4; padding-top: 12px; }
        .stat-source { font-size: 11px; color: #7aafc5; font-style: italic; }

        .stat-bar-track { height: 4px; background: #d8eef8; border-radius: 99px; overflow: hidden; margin-top: 4px; }
        .stat-bar-fill  { height: 100%; border-radius: 99px; width: 0%; transition: width 1.4s cubic-bezier(0.4,0,0.2,1); }

        .stats-alert {
            background: #f4fafd; border: 1px solid #b8d9ef;
            border-radius: 16px; padding: 20px 24px;
            display: flex; gap: 16px; align-items: flex-start;
            position: relative; z-index: 1;
        }
        .stats-alert .alert-icon { font-size: 22px; flex-shrink: 0; margin-top: 2px; }
        .stats-alert .alert-content h4 { font-size: 14px; font-weight: 700; color: #1e4f65; margin-bottom: 6px; }
        .stats-alert .alert-content p  { font-size: 13px; color: #4d7d95; line-height: 1.6; }
        .stats-source-line { text-align: center; font-size: 11px; color: #7aafc5; margin-top: 20px; position: relative; z-index: 1; }

        /* ===== MENU SECTION ===== */
        .topik-section {
            margin-top: 48px; padding: 60px 24px;
            background: #ddeef8;
            border-radius: 20px;
            border: 1px solid #b8d9ef;
            box-shadow: 0 4px 14px rgba(100,170,210,0.1);
        }
        .grid-cards-left-style {
            display: flex;
            justify-content: center;
            align-items: stretch;
            gap: 20px;
            flex-wrap: nowrap;
            max-width: 1400px;
            margin: 0 auto;
        }
        .reveal-card {
            opacity: 0;
            transform: translateY(25px);
            will-change: transform, opacity;
        }
        .reveal-card.visible {
            animation: smoothReveal 0.8s ease-out forwards;
        }
        @keyframes smoothReveal {
            0% { opacity: 0; transform: translateY(25px); }
            70% { opacity: 1; transform: translateY(-3px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        .card-horizontal {
            background: #ffffff; border-radius: 16px; padding: 24px;
            display: flex; align-items: center; gap: 20px;
            flex: 1; min-width: 0; max-width: 260px;
            box-shadow: 0 2px 10px rgba(100,170,210,0.1);
            border: 1px solid #c5e2f2;
            transition: transform 0.4s cubic-bezier(0.175,0.885,0.32,1.275),
                        box-shadow 0.3s ease, border-color 0.3s ease, background-color 0.3s ease;
        }
        .card-horizontal.visible:hover {
            background: #f4fafd;
            transform: translateY(-4px) scale(1.01);
            box-shadow: 0 12px 24px rgba(100,170,210,0.18);
            border-color: #8ec8e3;
        }

        .icon-circle-container {
            width: 58px; height: 58px; border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: 26px; flex-shrink: 0;
            background: #d8eef8;
            transition: transform 0.3s cubic-bezier(0.175,0.885,0.32,1.275);
        }
        .card-horizontal:hover .icon-circle-container { transform: scale(1.15) rotate(8deg); }
        .card-body-text { display: flex; flex-direction: column; gap: 4px; overflow: hidden; }
        .card-body-text h3 { font-size: 16px; font-weight: 700; color: #1e4f65; line-height: 1.3; transition: color 0.3s ease; }
        .card-horizontal:hover .card-body-text h3 { color: #2a7a9c; }
        .card-body-text p {
            font-size: 13px; color: #4d7d95; line-height: 1.5; text-align: left;
            display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;
            overflow: hidden; text-overflow: ellipsis;
        }

        /* ===== FOOTER ===== */
        .site-footer {
            margin-top: 64px;
            background: #cde7f5;
            border-top: 1px solid #a8d4eb;
            border-radius: 24px 24px 0 0;
            overflow: hidden;
            position: relative;
        }
        .site-footer::before {
            content: '';
            position: absolute; top: 0; left: 50%; transform: translateX(-50%);
            width: 600px; height: 2px;
            background: linear-gradient(90deg, transparent, #8ec8e3, #b8d9ef, #8ec8e3, transparent);
        }
        .footer-inner {
            max-width: 1140px;
            margin: 0 auto;
            padding: 48px 32px 0;
            display: grid;
            grid-template-columns: 1.6fr 1fr 1fr;
            gap: 48px;
        }

        .footer-logo {
            display: flex; align-items: center; gap: 14px;
            margin-bottom: 16px;
        }
        .footer-logo img {
            width: 64px; height: 64px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #a8d4eb;
            background: #fff;
            padding: 4px;
        }
        .footer-logo-text .brand-name {
            font-size: 20px; font-weight: 800; color: #1e4f65;
            line-height: 1.1;
        }
        .footer-logo-text .brand-sub {
            font-size: 11px; color: #4d7d95; font-weight: 600;
            text-transform: uppercase; letter-spacing: 1px;
        }
        .footer-address {
            font-size: 13px; color: #3d6e85; line-height: 1.7;
            border-left: 2px solid #a8d4eb;
            padding-left: 14px;
        }
        .footer-address strong { color: #1e4f65; display: block; margin-bottom: 4px; font-size: 12px; text-transform: uppercase; letter-spacing: 0.5px; }

        .footer-col h4 {
            font-size: 13px; font-weight: 800;
            text-transform: uppercase; letter-spacing: 1.5px;
            color: #1e4f65;
            margin-bottom: 20px;
            display: flex; align-items: center; gap: 8px;
        }
        .footer-col h4::after {
            content: '';
            flex: 1; height: 1px;
            background: linear-gradient(90deg, #a8d4eb, transparent);
        }
        .footer-col ul { list-style: none; display: flex; flex-direction: column; gap: 10px; }
        .footer-col ul li a {
            font-size: 14px; color: #3d6e85;
            display: flex; align-items: center; gap: 8px;
            padding: 8px 12px;
            border-radius: 10px;
            border: 1px solid transparent;
            transition: all 0.2s ease;
        }
        .footer-col ul li a:hover {
            color: #1e4f65;
            background: rgba(100,170,210,0.18);
            border-color: #a8d4eb;
            transform: translateX(4px);
        }
        .footer-col ul li a .link-icon {
            font-size: 16px; width: 20px; text-align: center; flex-shrink: 0;
        }

        .footer-bottom {
            max-width: 1140px; margin: 0 auto;
            padding: 20px 32px;
            display: flex; align-items: center; justify-content: space-between;
            margin-top: 40px;
            border-top: 1px solid #a8d4eb;
        }
        .footer-bottom p { font-size: 12px; color: #4d7d95; }
        .footer-bottom p span { color: #1e4f65; font-weight: 700; }
        .footer-badge {
            font-size: 11px; color: #2a6480;
            background: rgba(100,170,210,0.2);
            border: 1px solid #a8d4eb;
            padding: 4px 12px; border-radius: 20px;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 900px) {
            .footer-inner { grid-template-columns: 1fr 1fr; }
            .footer-brand { grid-column: 1 / -1; }
        }
        @media (max-width: 768px) {
            header { flex-direction: column; gap: 12px; padding: 14px 16px; border-radius: 0 0 12px 12px; }
            nav { flex-wrap: wrap; justify-content: center; }
            .hero { flex-direction: column; padding: 32px 24px; gap: 32px; }
            .hero-image-container { max-width: 70%; width: 100%; }
            .card-horizontal { width: 100%; min-width: unset; }
            .stats-grid { grid-template-columns: 1fr; }
            .stat-number { font-size: 36px; }
            .stats-section { padding: 40px 20px; }
            .footer-inner { grid-template-columns: 1fr; gap: 32px; padding: 36px 20px 0; }
            .footer-bottom { flex-direction: column; gap: 10px; text-align: center; padding: 20px; }
        }
        @media (max-width: 1024px) and (min-width: 769px) {
            .card-horizontal { width: calc(50% - 12px); }
        }
    </style>
</head>
<body>

<div class="container">

    <!-- HEADER -->
    <header>
        <div class="logo"><a href="index.php">❀ BinaRuang.id</a></div>
        <nav>
            <a href="index.php" class="active"> Beranda</a>
            <a href="apa-itu.php"> Apa itu Grooming?</a>
            <a href="artikel.php"> Artikel</a>
            <a href="video-edukasi.php"> Video Edukasi</a>
            <a href="tentang-kami.php"> Tentang Kami</a>
        </nav>
    </header>

    <!-- HERO -->
    <section class="hero">
        <div class="hero-image-container">
            <img src="logo psikologi.png" alt="Logo Psikologi Universitas Halu Oleo">
        </div>
        <div class="hero-text">
            <div class="hero-text-dynamic-wrapper" id="hero-text-cluster">
                <div class="hero-subtitle" id="dynamic-subtitle">Selamat Datang di BinaRuang.id</div>
                <h1 id="dynamic-title">Ruang Aman bagi Remaja untuk Bertumbuh dan Belajar</h1>
                <p id="dynamic-desc">Selamat datang di platform edukasi BinaRuang! Kami hadir untuk mendampingi langkahmu mengeksplorasi dunia siber dengan cara yang sehat, cerdas, bijak, dan penuh rasa percaya diri.</p>
            </div>
        </div>
    </section>

    <!-- STATISTIK -->
    <section class="stats-section">
        <div class="stats-header">
            <div class="eyebrow">📊 Data & Fakta 2024</div>
            <h2>Statistik Prevalensi Kasus &<br><span>Tingkat Pelaporan</span></h2>
            <p>Ringkasan Data Global & Indonesia  kenali fakta di balik bahaya yang tersembunyi</p>
        </div>

        <div class="stats-grid">
            <div class="stat-card cyan reveal-stat" data-delay="0" data-pct="56">
                <div class="stat-top">
                    <div class="stat-icon-bg">🙈</div>
                    <div class="stat-number-block">
                        <div class="stat-number">56%</div>
                        <div class="stat-label">Kasus Tidak Terlaporkan</div>
                    </div>
                </div>
                <div class="stat-bar-track">
                    <div class="stat-bar-fill" style="background: linear-gradient(90deg, #5aacce, #2a7a9c);"></div>
                </div>
                <p class="stat-desc">Mayoritas kasus eksploitasi dan pelecehan anak berbasis digital di Indonesia tidak diungkapkan karena rasa bersalah, manipulasi pelaku, atau minimnya edukasi.</p>
                <div class="stat-source">Sumber: KPAI, 2024</div>
            </div>

            <div class="stat-card violet reveal-stat" data-delay="150" data-pct="17">
                <div class="stat-top">
                    <div class="stat-icon-bg">🧒</div>
                    <div class="stat-number-block">
                        <div class="stat-number">16,6%</div>
                        <div class="stat-label">Anak Pernah Menjadi Korban</div>
                    </div>
                </div>
                <div class="stat-bar-track">
                    <div class="stat-bar-fill" style="background: linear-gradient(90deg, #6ab5d8, #3585a8);"></div>
                </div>
                <p class="stat-desc">Berdasarkan meta-analisis global, sekurangnya 1 dari 6 anak di bawah usia 18 tahun pernah mengalami salah satu bentuk eksploitasi seksual digital sepanjang hidupnya.</p>
                <div class="stat-source">Sumber: WeProtect Global Alliance, 2024</div>
            </div>

            <div class="stat-card amber reveal-stat" data-delay="300" data-pct="8">
                <div class="stat-top">
                    <div class="stat-icon-bg">📅</div>
                    <div class="stat-number-block">
                        <div class="stat-number">8,1%</div>
                        <div class="stat-label">Mengalami Kasus dalam Setahun Terakhir</div>
                    </div>
                </div>
                <div class="stat-bar-track">
                    <div class="stat-bar-fill" style="background: linear-gradient(90deg, #75bcd8, #3e8faf);"></div>
                </div>
                <p class="stat-desc">Persentase anak-anak di bawah 18 tahun yang aktif menjadi sasaran kejahatan seksual siber atau mengalami insiden serupa dalam 12 bulan terakhir.</p>
                <div class="stat-source">Sumber: Childlight Global Child Safety Report, 2024</div>
            </div>

            <div class="stat-card rose reveal-stat" data-delay="450" data-pct="30">
                <div class="stat-top">
                    <div class="stat-icon-bg">📣</div>
                    <div class="stat-number-block">
                        <div class="stat-number">30%</div>
                        <div class="stat-label">Korban Hanya Bercerita kepada Orang Terdekat</div>
                    </div>
                </div>
                <div class="stat-bar-track">
                    <div class="stat-bar-fill" style="background: linear-gradient(90deg, #5aacd0, #2a7898);"></div>
                </div>
                <p class="stat-desc">Hanya sekitar 3 dari 10 anak korban yang pernah menceritakan pengalaman mereka kepada orang dewasa tepercaya seperti orang tua, guru, atau kerabat.</p>
                <div class="stat-source">Sumber: NCMEC, 2024</div>
            </div>
        </div>

        <div class="stats-alert">
            <div class="alert-icon">⚠️</div>
            <div class="alert-content">
                <h4>Perlu Perhatian Serius</h4>
                <p>Tingginya angka kasus yang tidak terlaporkan menunjukkan masih banyak anak yang tidak mendapatkan perlindungan dan bantuan yang mereka butuhkan. Edukasi, dukungan, dan sistem pelaporan yang aman menjadi kunci utama pencegahan dan penanganan.</p>
            </div>
        </div>

        <div class="stats-source-line">
            Sumber: KPAI (2024) | WeProtect Global Alliance (2024) | Childlight Global (2024) | NCMEC (2024)
        </div>
    </section>

    <!-- MENU UTAMA -->
    <section class="topik-section">
        <div class="grid-cards-left-style">
            <a href="apa-itu.php" class="card-horizontal reveal-card">
                <div class="icon-circle-container">🚨</div>
                <div class="card-body-text">
                    <h3>Apa itu Child Grooming?</h3>
                    <p>Pahami definisi dasar dan bagaimana cara pelaku manipulasi emosi targetnya di dunia maya.</p>
                </div>
            </a>
            <a href="artikel.php" class="card-horizontal reveal-card">
                <div class="icon-circle-container">🧠</div>
                <div class="card-body-text">
                    <h3>Artikel</h3>
                    <p>Melihat artikel di balik manipulasi grooming dan dampaknya bagi psikis remaja.</p>
                </div>
            </a>
            <a href="video-edukasi.php" class="card-horizontal reveal-card">
                <div class="icon-circle-container">🎬</div>
                <div class="card-body-text">
                    <h3>Video Edukasi</h3>
                    <p>Tonton animasi pendek tentang simulasi cara menolak ajakan mencurigakan dari orang asing.</p>
                </div>
            </a>
            <a href="tentang-kami.php" class="card-horizontal reveal-card">
                <div class="icon-circle-container">✨</div>
                <div class="card-body-text">
                    <h3>Tentang Kami</h3>
                    <p>Kenalan dengan gerakan BinaRuang dalam menciptakan ruang siber yang aman untuk remaja.</p>
                </div>
            </a>
        </div>
    </section>

</div><!-- /container -->

<!-- ===== FOOTER ===== -->
<footer class="site-footer">
    <div class="footer-inner">

        <div class="footer-brand">
            <div class="footer-logo">
                <img src="logo psikologi.png" alt="Logo Psikologi UHO">
                <div class="footer-logo-text">
                    <div class="brand-name">❀ <BinaRuang class="id">BinaRuang.id</BinaRuang></div>
                    <div class="brand-sub">Psikologi · Universitas Halu Oleo</div>
                </div>
            </div>
            <div class="footer-address">
                <strong>Alamat Kampus</strong>
                Jalan H.E.A. Mokodompit Kampus Hijau Bumi Tridharma<br>
                Anduonohu Kendari, 93132<br>
                Gedung FKIP, Universitas Halu Oleo
            </div>
        </div>

        <div class="footer-col">
            <h4>Tautan Cepat</h4>
            <ul>
                <li>
                    <a href="https://maps.google.com/?q=Universitas+Halu+Oleo+Kendari" target="_blank" rel="noopener">
                        <span class="link-icon"></span> Peta Kampus
                    </a>
                </li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>Layanan</h4>
            <ul>
                <li>
                    <a href="tentang-kami.php">
                        <span class="link-icon"></span> Hubungi Kami
                    </a>
                </li>
                <li>
                    <a href="tentang-kami.php">
                        <span class="link-icon"></span> Tentang Kami
                    </a>
                </li>
            </ul>
        </div>

    </div>

    <div class="footer-bottom">
        <p>© 2026 <span>BinaRuang.id</span> · Jurusan Psikologi, Universitas Halu Oleo. Hak cipta dilindungi.</p>
        <div class="footer-badge">Platform Edukasi Remaja 🛡️</div>
    </div>
</footer>

<script>
    // 1. HERO CAROUSEL
    const textCluster = document.getElementById('hero-text-cluster');
    const subtitleEl  = document.getElementById('dynamic-subtitle');
    const titleEl     = document.getElementById('dynamic-title');
    const descEl      = document.getElementById('dynamic-desc');

    const contentCarousel = [
        {
            subtitle: "Selamat Datang di BinaRuang.id ",
            title: "Ruang Aman bagi Remaja untuk Bertumbuh dan Belajar",
            desc: "Selamat datang di platform edukasi BinaRuang! Kami hadir untuk mendampingi langkahmu mengeksplorasi dunia siber dengan cara yang sehat, cerdas, bijak, dan penuh rasa percaya diri."
        },
        {
            subtitle: "Edukasi & Pencegahan Remaja",
            title: "Kenali Pola Manipulasi, Cegah Bahaya Sejak Dini",
            desc: "Mari bedah taktik licik kejahatan digital seperti child grooming dari kacamata psikologi. Dengan mengenali modusnya, kamu bisa mendeteksi sinyal bahaya sebelum terlambat."
        },
        {
            subtitle: "Lindungi Privasi Digitalmu ",
            title: "Batasi Informasi, Amankan Ruang Gerak Virtualmu",
            desc: "Jangan mudah tergiur membagikan data identitas pribadi atau foto kepada orang asing di internet. Tegakkan batasan privasi yang kuat demi melindungi kesehatan mental dirimu."
        }
    ];

    let currentIndex = 0;
    setInterval(() => {
        textCluster.classList.add('fade-out');
        setTimeout(() => {
            currentIndex = (currentIndex + 1) % contentCarousel.length;
            subtitleEl.textContent = contentCarousel[currentIndex].subtitle;
            titleEl.textContent    = contentCarousel[currentIndex].title;
            descEl.textContent     = contentCarousel[currentIndex].desc;
            textCluster.classList.remove('fade-out');
        }, 500);
    }, 5000);

    // 2. ANIMASI STATS + MENU
    document.addEventListener("DOMContentLoaded", () => {
        const statCards = document.querySelectorAll('.reveal-stat');
        const statObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const card  = entry.target;
                    const delay = parseInt(card.dataset.delay || 0);
                    const pct   = parseInt(card.dataset.pct || 0);
                    setTimeout(() => {
                        card.classList.add('stat-visible');
                        const fill = card.querySelector('.stat-bar-fill');
                        if (fill) fill.style.width = pct + '%';
                    }, delay);
                    statObserver.unobserve(card);
                }
            });
        }, { threshold: 0.1 });
        statCards.forEach(c => statObserver.observe(c));

        const menuCards = document.querySelectorAll('.reveal-card');
        const cardObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const idx = Array.from(menuCards).indexOf(entry.target);
                    setTimeout(() => entry.target.classList.add('visible'), idx * 150);
                    cardObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.05 });
        menuCards.forEach(c => cardObserver.observe(c));
    });
</script>
</body>
</html>