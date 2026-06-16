<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Artikel - BinaRuang.id</title>

<style>
* { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', sans-serif; }
body { background: #24495e; color: #2c4a5a; line-height: 1.6; }
a { text-decoration: none; color: inherit; }

.container { max-width: 1000px; margin: 0 auto; padding: 0 20px; }

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
.logo { font-size: 24px; font-weight: 800; color: #2a6480; }

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
    transition: color 0.2s ease,
                background-color 0.2s ease,
                border-color 0.2s ease;
    white-space: nowrap;
}

nav a:hover {
    color: #1e5570;
    background-color: rgba(100,170,210,0.2);
    border-color: #a8d4eb;
}
.page-content {
    margin-top: 40px;
    padding: 40px;
    border: 1px solid #b8d9ef;
    border-radius: 20px;
    background: #ddeef8;
}

.btn-back {
    display: inline-block;
    padding: 8px 16px;
    background-color: #f3f4f6;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 600;
    color: #4b5563;
    margin-bottom: 15px;
}

/* Grid */
.ref-grid {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 30px;
}

.ref-card {
    flex: 1;
    max-width: 33%;
    padding: 24px;
    border-radius: 16px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    color: white;
    background-size: cover;
    background-position: center;
    position: relative;
    overflow: hidden;
}

/* Overlay biar teks kebaca */
.ref-card::before {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.5);
}

.ref-card > * {
    position: relative;
    z-index: 2;
}

.ref-card:hover {
    transform: translateY(-5px);
}

.ref-label {
    font-size: 12px;
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 10px;
    display: block;
}

.ref-title {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 10px;
    display: block;
}

.ref-desc {
    font-size: 14px;
    margin-bottom: 20px;
}

.read-more {
    font-weight: bold;
    font-size: 14px;
}
</style>
</head>

<body>
<div class="container">

<header>
<div class="logo"><a href="index.php">❀ BinaRuang.id</a></div>
<nav>
    <a href="index.php">Beranda</a>
    <a href="apa-itu.php">Apa itu Grooming?</a>
    <a href="artikel.php">Artikel</a>
    <a href="video-edukasi.php">Video Edukasi</a>
    <a href="tentang-kami.php">Tentang Kami</a>
</nav>
</header>

<div class="page-content">

<a href="index.php" class="btn-back">← Kembali ke Beranda</a>

<h3 style="margin-top: 20px; color: #111827; text-align: center;">ARTIKEL</h3>

<div class="ref-grid">

<a href="https://share.google/bqHnrMqFXi32py9w3" target="_blank"
class="ref-card"
style="background-image: url('gambar1.webp');">

<div>
<span class="ref-label">Edukasi</span>
<span class="ref-title">Mengenali Modus Grooming</span>
<p class="ref-desc">Memahami pola-pola awal yang sering digunakan pelaku untuk menjerat korban.</p>
</div>

<span class="read-more">Baca →</span>
</a>

<a href="https://share.google/ot7LpL3mcG8Fztk0w" target="_blank"
class="ref-card"
style="background-image: url('gambar2.webp');">

<div>
<span class="ref-label">Digital Safety</span>
<span class="ref-title">Proteksi Diri Digital</span>
<p class="ref-desc">Panduan praktis menjaga keamanan anak dan remaja di ruang internet.</p>
</div>

<span class="read-more">Baca →</span>
</a>

<a href="https://komnasperempuan.go.id/kabar-perempuan-detail/komnas-perempuan-tegaskan-child-grooming-sebagai-kekerasan-berbasis-gender-dalam-rdp-komisi-xiii-dpr-ri"
target="_blank"
class="ref-card"
style="background-image: url('gambar3.webp');">

<div>
<span class="ref-label">Hukum</span>
<span class="ref-title">Perspektif Komnas Perempuan</span>
<p class="ref-desc">Penegasan grooming sebagai kekerasan berbasis gender di ranah hukum.</p>
</div>

<span class="read-more">Baca →</span>
</a>

</div>
</div>
</div>
</body>
</html>
