<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami — BinaRuang</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', -apple-system, BlinkMacSystemFont, Roboto, sans-serif; }

        body {
            background: #24495e;
            color: #1e3a5f;
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
            border-bottom: 1px solid #c5d9ee;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        }
        .logo { font-size: 24px; font-weight: 800; color: #1e3a5f; display: flex; align-items: center; gap: 8px; }
        nav { display: flex; align-items: center; gap: 6px; }
        nav a {
            font-size: 14px; font-weight: 600; color: #4a6fa5;
            padding: 8px 16px; border-radius: 10px;
            border: 1px solid transparent;
            transition: color 0.2s ease, background-color 0.2s ease, border-color 0.2s ease;
            white-space: nowrap;
        }
        nav a:hover { color: #1e3a5f; background-color: #e8f0fa; }
        nav a.active {
            color: #1e5570;
            background-color: rgba(100,170,210,0.25);
            border-color: #8ec8e3;
        }

        /* ===== PAGE HERO ===== */
        .page-hero {
            margin-top: 32px;
            background: #dceef8;
            border: 1px solid #b8daf0;
            border-radius: 24px;
            padding: 56px 48px;
            position: relative;
            overflow: hidden;
        }
        .page-hero::before {
            content: '';
            position: absolute; top: -60px; right: -60px;
            width: 300px; height: 300px;
            background: radial-gradient(circle, rgba(30,58,95,0.1) 0%, transparent 70%);
            border-radius: 50%; pointer-events: none;
        }
        .hero-eyebrow {
            display: inline-block;
            font-size: 12px; font-weight: 700; letter-spacing: 2px;
            text-transform: uppercase; color: #1e3a5f;
            background: rgba(30,58,95,0.1);
            border: 1px solid rgba(30,58,95,0.25);
            padding: 6px 16px; border-radius: 20px;
            margin-bottom: 20px;
        }
        .page-hero h1 {
            font-size: 40px; font-weight: 900; line-height: 1.2;
            color: #1e4f65; max-width: 640px;
            letter-spacing: -0.5px; margin-bottom: 20px;
        }
        .page-hero h1 span {
            background: linear-gradient(90deg, #2563eb, #1e3a5f, #4a6fa5);
            -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
        }
        .page-hero p {
            font-size: 16px; color: #3d6e85; max-width: 580px; line-height: 1.75;
        }

        /* ===== SECTION UMUM ===== */
        .section { margin-top: 48px; }
        .section-eyebrow {
            font-size: 11px; font-weight: 800; letter-spacing: 2.5px;
            text-transform: uppercase; color: #ffffff;
            margin-bottom: 8px; display: block;
        }
        .section-title {
            font-size: 26px; font-weight: 800; color: #1e3a5f;
            margin-bottom: 32px; line-height: 1.3;
        }

        /* ===== TENTANG / INTRO ===== */
        .about-intro {
            background: #dceef8;
            border: 1px solid #b8daf0;
            border-radius: 20px;
            padding: 40px 44px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }
        .about-intro p {
            font-size: 15px; color: #4a6fa5; line-height: 1.85;
            max-width: 780px; text-align: justify;
        }
        .about-intro p + p { margin-top: 18px; }
        .about-intro strong { color: #1e3a5f; font-weight: 700; }
        .about-intro em { color: #2563eb; font-style: italic; }

        /* ===== VISI MISI ===== */
        .visi-misi-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        .vm-card {
            background: #dceef8;
            border: 1px solid #b8daf0;
            border-radius: 20px;
            padding: 32px 28px;
            position: relative;
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
            opacity: 0; transform: translateY(24px);
            box-shadow: 0 4px 10px rgba(0,0,0,0.03);
        }
        .vm-card.fade-in { animation: fadeUp 0.6s ease forwards; }
        @keyframes fadeUp { to { opacity: 1; transform: translateY(0); } }
        .vm-card:hover {
            transform: translateY(-4px);
            border-color: rgba(30,58,95,0.4);
            box-shadow: 0 16px 32px rgba(30,58,95,0.1);
        }
        .vm-icon {
            font-size: 28px; margin-bottom: 16px; display: block;
        }
        .vm-card h3 { font-size: 18px; font-weight: 800; color: #1e3a5f; margin-bottom: 12px; }
        .vm-card p { font-size: 14px; color: #4a6fa5; line-height: 1.75; }

        /* ===== PRINSIP KAMI ===== */
        .prinsip-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        .prinsip-card {
            background: #dceef8;
            border: 1px solid #b8daf0;
            border-radius: 20px;
            padding: 28px 24px;
            transition: transform 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
            opacity: 0; transform: translateY(24px);
            box-shadow: 0 4px 10px rgba(0,0,0,0.03);
        }
        .prinsip-card.fade-in { animation: fadeUp 0.6s ease forwards; }
        .prinsip-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 24px rgba(0,0,0,0.08);
        }
        .prinsip-card.biru  { border-top: 3px solid #3b82f6; }
        .prinsip-card.biru:hover  { border-color: #3b82f6 #c5d9ee #c5d9ee #c5d9ee; box-shadow: 0 12px 24px rgba(59,130,246,0.15); }
        .prinsip-card.biru .prinsip-icon  { color: #3b82f6; }

        .prinsip-card.pink  { border-top: 3px solid #fb7185; }
        .prinsip-card.pink:hover  { border-color: #fb7185 #c5d9ee #c5d9ee #c5d9ee; box-shadow: 0 12px 24px rgba(251,113,133,0.15); }
        .prinsip-card.pink .prinsip-icon  { color: #fb7185; }

        .prinsip-card.amber { border-top: 3px solid #f59e0b; }
        .prinsip-card.amber:hover { border-color: #f59e0b #c5d9ee #c5d9ee #c5d9ee; box-shadow: 0 12px 24px rgba(245,158,11,0.12); }
        .prinsip-card.amber .prinsip-icon { color: #f59e0b; }

        .prinsip-icon { font-size: 26px; margin-bottom: 14px; display: block; }
        .prinsip-card h3 { font-size: 16px; font-weight: 800; color: #1e3a5f; margin-bottom: 8px; }
        .prinsip-card p { font-size: 13px; color: #4a6fa5; line-height: 1.7; }

        /* ===== TIM ===== */
        .tim-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        .tim-card {
            background: #dceef8;
            border: 1px solid #b8daf0;
            border-radius: 20px;
            padding: 32px 24px;
            text-align: center;
            transition: transform 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
            opacity: 0; transform: translateY(24px);
            box-shadow: 0 4px 10px rgba(0,0,0,0.03);
        }
        .tim-card.fade-in { animation: fadeUp 0.6s ease forwards; }
        .tim-card:hover {
            transform: translateY(-6px);
            border-color: rgba(30,58,95,0.4);
            box-shadow: 0 16px 32px rgba(30,58,95,0.1);
        }
        .tim-avatar {
            width: 72px; height: 72px; border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: 22px; font-weight: 800;
            margin: 0 auto 16px;
            border: 2px solid transparent;
        }
        .tim-avatar.teal   { background: rgba(20,184,166,0.15); color: #0f9688; border-color: rgba(20,184,166,0.4); }
        .tim-avatar.violet { background: rgba(99,102,241,0.15);  color: #4f46e5; border-color: rgba(99,102,241,0.4); }
        .tim-avatar.pink   { background: rgba(251,113,133,0.15); color: #e11d48; border-color: rgba(251,113,133,0.4); }
        .tim-avatar.green  { background: rgba(34,197,94,0.15);   color: #16a34a; border-color: rgba(34,197,94,0.4); }
        .tim-avatar.amber  { background: rgba(245,158,11,0.15);  color: #d97706; border-color: rgba(245,158,11,0.4); }
        .tim-avatar.rose   { background: rgba(244,63,94,0.15);   color: #e11d48; border-color: rgba(244,63,94,0.4); }
        .tim-card h3 { font-size: 16px; font-weight: 800; color: #1e3a5f; margin-bottom: 6px; }
        .tim-card .tim-role {
            font-size: 13px; color: #7a9cbf; font-weight: 600;
            text-transform: uppercase; letter-spacing: 0.8px;
        }

        /* ===== HUBUNGI KAMI ===== */
        .kontak-section {
            margin-top: 48px;
            background: #dceef8;
            border: 1px solid #b8daf0;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }
        .kontak-inner { padding: 48px 44px; }
        .kontak-alert {
            background: rgba(251,113,133,0.08);
            border: 1px solid rgba(251,113,133,0.3);
            border-radius: 14px;
            padding: 18px 20px;
            display: flex; gap: 12px; align-items: flex-start;
            margin-bottom: 36px;
        }
        .kontak-alert .alert-icon { font-size: 20px; flex-shrink: 0; }
        .kontak-alert h4 { font-size: 13px; font-weight: 800; color: #e11d48; margin-bottom: 8px; }
        .kontak-alert p  { font-size: 13px; color: #4a6fa5; line-height: 1.6; margin-bottom: 10px; }
        .alert-badges { display: flex; gap: 8px; flex-wrap: wrap; }
        .alert-badge {
            font-size: 12px; font-weight: 700; color: #e11d48;
            background: rgba(251,113,133,0.12);
            border: 1px solid rgba(251,113,133,0.3);
            padding: 4px 12px; border-radius: 8px;
        }

        .kontak-channels {
            display: grid; grid-template-columns: repeat(3, 1fr);
            gap: 16px; margin-bottom: 36px;
        }
        .channel-card {
            background: #f0f7ff;
            border: 1px solid #c5d9ee;
            border-radius: 14px;
            padding: 20px 18px;
            transition: border-color 0.2s, box-shadow 0.2s;
        }
        .channel-card:hover { border-color: #4a6fa5; box-shadow: 0 6px 16px rgba(30,58,95,0.08); }
        .channel-icon { font-size: 22px; margin-bottom: 10px; }
        .channel-card h4 { font-size: 14px; font-weight: 800; color: #1e3a5f; margin-bottom: 4px; }
        .channel-card .channel-sub { font-size: 12px; color: #7a9cbf; margin-bottom: 8px; }
        .channel-card .channel-val { font-size: 13px; font-weight: 600; color: #2563eb; }

        /* ===== FORM ===== */
        .form-title { font-size: 18px; font-weight: 800; color: #1e3a5f; margin-bottom: 20px; }
        .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px; }
        .form-group { display: flex; flex-direction: column; gap: 6px; margin-bottom: 16px; }
        .form-group label { font-size: 13px; font-weight: 700; color: #4a6fa5; }
        .form-group input,
        .form-group select,
        .form-group textarea {
            background: #f0f7ff;   
            border: 1px solid #c5d9ee;
            border-radius: 10px;
            padding: 12px 14px;
            font-size: 14px; color: #1e3a5f;
            font-family: inherit;
            transition: border-color 0.2s, box-shadow 0.2s;
            width: 100%;
        }
        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37,99,235,0.12);
        }
        .form-group input::placeholder,
        .form-group textarea::placeholder { color: #7a9cbf; }
        .form-group select option { background: #ffffff; color: #1e3a5f; }
        .form-group textarea { resize: vertical; min-height: 120px; }
        .form-check {
            display: flex; align-items: center; gap: 10px;
            font-size: 13px; color: #7a9cbf; margin-bottom: 20px; cursor: pointer;
        }
        .form-check input[type="checkbox"] {
            width: 16px; height: 16px; accent-color: #2563eb; cursor: pointer;
        }
        .btn-kirim {
            width: 100%;
            background: linear-gradient(135deg, #2563eb, #1e3a5f);
            border: none; border-radius: 12px;
            padding: 14px 24px;
            font-size: 15px; font-weight: 800; color: #fff;
            cursor: pointer; letter-spacing: 0.3px;
            transition: opacity 0.2s, transform 0.2s, box-shadow 0.2s;
        }
        .btn-kirim:hover {
            opacity: 0.9; transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(37,99,235,0.35);
        }
        .jam-respons {
            display: flex; gap: 12px; align-items: flex-start;
            margin-top: 20px;
            font-size: 13px; color: #7a9cbf; line-height: 1.6;
        }
        .jam-respons strong { color: #4a6fa5; }

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
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 600px;
    height: 2px;
    background: linear-gradient(
        90deg,
        transparent,
        #8ec8e3,
        #b8d9ef,
        #8ec8e3,
        transparent
    );
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
    display: flex;
    align-items: center;
    gap: 14px;
    margin-bottom: 16px;
}

.footer-logo img {
    width: 64px;
    height: 64px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid #a8d4eb;
    background: #fff;
    padding: 4px;
}

.footer-logo-text .brand-name {
    font-size: 20px;
    font-weight: 800;
    color: #1e4f65;
    line-height: 1.1;
}

.footer-logo-text .brand-sub {
    font-size: 11px;
    color: #4d7d95;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.footer-address {
    font-size: 13px;
    color: #3d6e85;
    line-height: 1.7;
    border-left: 2px solid #a8d4eb;
    padding-left: 14px;
}

.footer-address strong {
    color: #1e4f65;
    display: block;
    margin-bottom: 4px;
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.footer-col h4 {
    font-size: 13px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    color: #1e4f65;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.footer-col h4::after {
    content: '';
    flex: 1;
    height: 1px;
    background: linear-gradient(90deg, #a8d4eb, transparent);
}

.footer-col ul {
    list-style: none;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.footer-col ul li a {
    font-size: 14px;
    color: #3d6e85;
    display: flex;
    align-items: center;
    gap: 8px;
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

.footer-bottom {
    max-width: 1140px;
    margin: 0 auto;
    padding: 20px 32px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 40px;
    border-top: 1px solid #a8d4eb;
}

.footer-bottom p {
    font-size: 12px;
    color: #4d7d95;
}

.footer-bottom p span {
    color: #1e4f65;
    font-weight: 700;
}

.footer-badge {
    font-size: 11px;
    color: #2a6480;
    background: rgba(100,170,210,0.2);
    border: 1px solid #a8d4eb;
    padding: 4px 12px;
    border-radius: 20px;
}
        /* ===== RESPONSIVE ===== */
        @media (max-width: 900px) {
            .prinsip-grid { grid-template-columns: 1fr 1fr; }
            .tim-grid     { grid-template-columns: 1fr 1fr; }
            .kontak-channels { grid-template-columns: 1fr 1fr; }
            .footer-inner { grid-template-columns: 1fr 1fr; }
            .footer-brand { grid-column: 1 / -1; }
        }
        @media (max-width: 768px) {
            header { flex-direction: column; gap: 12px; padding: 14px 16px; border-radius: 0 0 12px 12px; }
            nav { flex-wrap: wrap; justify-content: center; }
            .page-hero { padding: 36px 24px; }
            .page-hero h1 { font-size: 28px; }
            .visi-misi-grid { grid-template-columns: 1fr; }
            .prinsip-grid   { grid-template-columns: 1fr; }
            .tim-grid       { grid-template-columns: 1fr; }
            .kontak-channels { grid-template-columns: 1fr; }
            .form-row { grid-template-columns: 1fr; }
            .kontak-inner { padding: 32px 20px; }
            .about-intro { padding: 28px 24px; }
            .footer-inner { grid-template-columns: 1fr; gap: 32px; padding: 36px 20px 0; }
            .footer-bottom { flex-direction: column; gap: 10px; text-align: center; padding: 20px; }
        }
        /* =========================
   SCROLL REVEAL ANIMATION
========================= */

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
<body>

<div class="container">

    <!-- HEADER -->
    <header>
        <div class="logo"><a href="index.php">❀ BinaRuang.id</a></div>
        <nav>
            <a href="index.php"> Beranda</a>
            <a href="apa-itu.php"> Apa itu Grooming?</a>
            <a href="artikel.php">Artikel</a>
            <a href="video-edukasi.php"> Video Edukasi</a>
            <a href="tentang-kami.php" class="active"> Tentang Kami</a>
        </nav>
    </header>

    <!-- PAGE HERO -->
    <section class="page-hero">
        <div class="hero-eyebrow"> Tentang Kami</div>
        <h1>Kami hadir untuk menyuarakan apa yang sering kali diam <span>demi keselamatan anak-anak Indonesia</span></h1>
        <p>Platform edukasi ini dibangun oleh mahasiswa psikologi yang percaya bahwa kesadaran adalah perlindungan terbaik.</p>
    </section>

    <!-- TENTANG / INTRO -->
    <section class="section">
        <div class="about-intro">
            <p><strong>BinaRuang.id</strong> adalah inisiatif edukasi yang lahir dari kepedulian kami sebagai mahasiswa Psikologi terhadap maraknya kasus <em>child grooming</em> di Indonesia yang masih sering tidak terdeteksi bahkan oleh orang tua dan pendidik sekalipun.</p>
            <p>Berangkat dari penelitian dan mata kuliah Psikologi Perkembangan Anak, kami menyadari bahwa banyak pihak belum memahami tanda-tanda awal <em>grooming</em>. Website ini kami bangun sebagai ruang belajar yang aman, berbasis bukti ilmiah, dan dapat diakses oleh siapa saja.</p>
        </div>
    </section>

    <!-- VISI & MISI -->
    <section class="section">
        <span class="section-eyebrow">Arah & Tujuan</span>
        <div class="visi-misi-grid">
            <div class="vm-card reveal-vm" data-delay="0">
                <span class="vm-icon">🔭</span>
                <h3>Visi</h3>
                <p>Menjadi sumber informasi terpercaya tentang perlindungan anak dari kejahatan seksual berbasis manipulasi psikologis.</p>
            </div>
            <div class="vm-card reveal-vm" data-delay="150">
                <span class="vm-icon">🎯</span>
                <h3>Misi</h3>
                <p>Menyebarkan edukasi berbasis psikologi yang mudah dipahami oleh orang tua, pendidik, dan masyarakat umum.</p>
            </div>
        </div>
    </section>

    <!-- PRINSIP KAMI -->
    <section class="section">
        <span class="section-eyebrow">Prinsip Kami</span>
        <div class="prinsip-grid">
            <div class="prinsip-card biru reveal-prinsip" data-delay="0">
                <span class="prinsip-icon">🛡️</span>
                <h3>Berbasis Ilmu</h3>
                <p>Semua konten berlandaskan teori psikologi dan penelitian yang sahih.</p>
            </div>
            <div class="prinsip-card pink reveal-prinsip" data-delay="150">
                <span class="prinsip-icon">🩷</span>
                <h3>Aman</h3>
                <p>Penyajian informasi dilakukan dengan hati-hati tanpa memicu trauma.</p>
            </div>
            <div class="prinsip-card amber reveal-prinsip" data-delay="300">
                <span class="prinsip-icon">♿</span>
                <h3>Inklusif</h3>
                <p>Dapat diakses oleh semua kalangan, tidak hanya akademisi.</p>
            </div>
        </div>
    </section>

    <!-- TIM -->
    <section class="section">
        <span class="section-eyebrow">Tim di Balik Platform Ini</span>
        <div class="tim-grid">
            <div class="tim-card reveal-tim" data-delay="0">
                <div class="tim-avatar teal">NA</div>
                <h3>Nurul Mudi'a</h3>
                <div class="tim-role">A1R123020</div>
            </div>
            <div class="tim-card reveal-tim" data-delay="100">
                <div class="tim-avatar violet">PB</div>
                <h3>Putri Bulan Rahmadany</h3>
                <div class="tim-role">A1R123084</div>
            </div>
            <div class="tim-card reveal-tim" data-delay="200">
                <div class="tim-avatar pink">FR</div>
                <h3>Faisya Rengganis</h3>
                <div class="tim-role">A1R123010</div>
            </div>
            <div class="tim-card reveal-tim" data-delay="300">
                <div class="tim-avatar green">NT</div>
                <h3>Nova Triyani Rahma</h3>
                <div class="tim-role">A1R123082</div>
            </div>
            <div class="tim-card reveal-tim" data-delay="400">
                <div class="tim-avatar amber">RO</div>
                <h3>Rosvian</h3>
                <div class="tim-role">A1R123022</div>
            </div>
            <div class="tim-card reveal-tim" data-delay="500">
                <div class="tim-avatar rose">MN</div>
                <h3>Muhammad Naufal</h3>
                <div class="tim-role">A1R123079</div>
            </div>
        </div>
    </section>

    <!-- HUBUNGI KAMI -->
    <section class="kontak-section section">
        <div class="kontak-inner">
            <span class="section-eyebrow">Hubungi Kami</span>
            <div class="section-title">Ada pertanyaan, laporan, atau ingin berkolaborasi?</div>
            <p style="font-size:14px; color:#4a6fa5; margin-bottom:32px;">Kami siap mendengar. Pilih cara yang paling nyaman untuk menghubungi kami.</p>

            <!-- Alert darurat -->
            <div class="kontak-alert">
                <div class="alert-icon">⚠️</div>
                <div>
                    <h4>Butuh bantuan segera?</h4>
                    <p>Jika Anda atau anak di sekitar Anda sedang dalam situasi berbahaya, jangan hubungi kami — segera hubungi layanan darurat berikut:</p>
                    <div class="alert-badges">
                        <span class="alert-badge">KPAI: 021-3193-7555</span>
                        <span class="alert-badge">Hotline Anak: 129</span>
                        <span class="alert-badge">Polisi: 110</span>
                    </div>
                </div>
            </div>

            <!-- Channel kontak -->
            <div style="font-size:12px; font-weight:800; letter-spacing:2px; text-transform:uppercase; color:#7a9cbf; margin-bottom:14px;">Kontak Tim Kami</div>
            <div class="kontak-channels">
                <div class="channel-card">
                    <div class="channel-icon">📧</div>
                    <h4>Email</h4>
                    <div class="channel-sub">Untuk pertanyaan umum &amp; kolaborasi</div>
                    <div class="channel-val">BInaRuang@email.com</div>
                </div>
                <div class="channel-card">
                    <div class="channel-icon">📸</div>
                    <h4>Instagram</h4>
                    <div class="channel-sub">Ikuti edukasi harian kami</div>
                    <div class="channel-val">BInaRuang.ID</div>
                </div>
                <div class="channel-card">
                    <div class="channel-icon">💬</div>
                    <h4>WhatsApp</h4>
                    <div class="channel-sub">Respons dalam 1×24 jam</div>
                    <div class="channel-val">+62 812-4569-8765</div>
                </div>
            </div>

            <!-- Form pesan -->
            <div class="form-title">Kirim Pesan</div>
            <div class="form-row">
                <div class="form-group">
                    <label>Nama lengkap</label>
                    <input type="text" placeholder="Contoh: Budi Santoso">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" placeholder="email@contoh.com">
                </div>
            </div>
            <div class="form-group">
                <label>Topik pesan</label>
                <select>
                    <option value="" disabled selected>Pilih topik...</option>
                    <option>Pertanyaan umum</option>
                    <option>Kolaborasi edukasi</option>
                    <option>Laporan konten</option>
                    <option>Lainnya</option>
                </select>
            </div>
            <div class="form-group">
                <label>Pesan Anda</label>
                <textarea placeholder="Tuliskan pesan Anda di sini..."></textarea>
            </div>
            <label class="form-check">
                <input type="checkbox"> Saya ingin mengirim pesan secara anonim
            </label>
            <button class="btn-kirim">Kirim pesan</button>

            <div class="jam-respons">
                <span>🕐</span>
                <span><strong>Jam respons tim</strong><br>
                Kami merespons pesan pada <strong>Senin–Jumat, pukul 09.00–17.00 WIB</strong>. Pesan masuk di luar jam ini akan kami balas pada hari kerja berikutnya. Terima kasih atas kesabaran Anda.</span>
            </div>
        </div>
    </section>

</div><!-- /container -->

<!-- FOOTER -->
<footer class="site-footer">
    <div class="footer-inner">
        <div class="footer-brand">
            <div class="footer-logo">
                <img src="logo psikologi.png" alt="Logo Psikologi UHO">
                <div class="footer-logo-text">
                    <div class="brand-name">❀ BinaRuang.id</div>
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
                <li><a href="https://maps.google.com/?q=Universitas+Halu+Oleo+Kendari" target="_blank" rel="noopener"><span class="link-icon"></span> Peta Kampus</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>Layanan</h4>
            <ul>
                <li><a href="tentang-kami.php"><span class="link-icon"></span> Hubungi Kami</a></li>
                <li><a href="tentang-kami.php"><span class="link-icon"></span> Tentang Kami</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>© 2026 <span>BinaRuang.id</span> · Jurusan Psikologi, Universitas Halu Oleo. Hak cipta dilindungi.</p>
        <div class="footer-badge">Platform Edukasi Remaja 🛡️</div>
    </div>
</footer>

<script>
    // Scroll-reveal untuk semua card
    document.addEventListener("DOMContentLoaded", () => {
        const groups = [
            { selector: '.reveal-vm',      cls: 'fade-in' },
            { selector: '.reveal-prinsip', cls: 'fade-in' },
            { selector: '.reveal-tim',     cls: 'fade-in' },
        ];

        groups.forEach(({ selector, cls }) => {
            const cards = document.querySelectorAll(selector);
            const obs = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const card  = entry.target;
                        const delay = parseInt(card.dataset.delay || 0);
                        setTimeout(() => card.classList.add(cls), delay);
                        obs.unobserve(card);
                    }
                });
            }, { threshold: 0.1 });
            cards.forEach(c => obs.observe(c));
        });
    });
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {

    const cards = document.querySelectorAll(
        '.tahap-card, .strategi-card, .artikel-card, .dampak-card'
    );

    cards.forEach((card, index) => {
        if (index % 4 === 0) {
            card.classList.add('reveal-left');
        } else if (index % 4 === 1) {
            card.classList.add('reveal-right');
        } else if (index % 4 === 2) {
            card.classList.add('reveal-scale');
        } else {
            card.classList.add('reveal');
        }
    });

    function revealElements() {
        const triggerBottom = window.innerHeight * 0.85;

        cards.forEach(card => {
            const top = card.getBoundingClientRect().top;
            const bottom = card.getBoundingClientRect().bottom;

            if (top < triggerBottom && bottom > 0) {
                card.classList.add('show');
            } else {
                card.classList.remove('show');
            }
        });
    }

    window.addEventListener('scroll', revealElements);
    revealElements();
});
</script>
</body>
</html>