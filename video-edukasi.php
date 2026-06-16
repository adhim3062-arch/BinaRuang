<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Edukasi - BinaRuang.id</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
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
        body { background-color: 
        #24495e; }

        .video-card { 
            transition: all 0.4s ease; 
            margin-bottom: 24px;
        }
        .video-card:hover { transform: scale(1.01); }
        .iframe-container { 
            position: relative; 
            padding-bottom: 56.25%; 
            height: 0; 
            overflow: hidden; 
            border-radius: 12px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        .iframe-container iframe { 
            position: absolute; 
            top: 0; 
            left: 0; 
            width: 100%; 
            height: 100%; 
        }
    </style>
</head>
<body class="text-slate-800">

<div class="max-w-5xl mx-auto px-6 py-4">

    <!-- Navbar seperti apa-itu.php -->
<header class="bg-blue-100 border border-blue-200 rounded-2xl px-6 py-3 flex justify-between items-center shadow-sm mb-8">
    <div class="text-2xl font-extrabold text-[#2a6480]">
        <a href="index.php" class="flex items-center gap-2">
            <span>✿</span> BinaRuang.id
        </a>
    </div>
    <nav>
    <a href="index.php">Beranda</a>
    <a href="apa-itu.php">Apa itu Grooming?</a>
    <a href="artikel.php">Artikel</a>
    <a href="video-edukasi.php">Video Edukasi</a>
    <a href="tentang-kami.php">Tentang Kami</a>
</nav>
</header>

    <a href="index.php" class="inline-block mb-6 text-sm font-semibold text-[#ffffff] hover:text-blue-700 transition">← Kembali ke Beranda</a>

    <div class="mb-10">
        <h1 class="text-3xl font-extrabold mb-3 text-[#ffffff]">Video Edukasi Waspada Cybercrime</h1>
        <p class="text-base text-[#ffffff]">Jelajahi panduan visual mengenai deteksi dini dan perlindungan anak di dunia digital.</p>
    </div>

    <div class="flex flex-col">

        <!-- Kartu video dibungkus warna biru seperti apa-itu.php -->
        <div class="video-card bg-blue-100 p-6 rounded-2xl border border-blue-200 shadow-sm">
            <div class="iframe-container">
                <iframe src="https://www.youtube.com/embed/W3jEwZq6mwc" frameborder="0" allowfullscreen></iframe>
            </div>
            <h3 class="font-bold text-lg mt-5 mb-1 text-slate-800">1. Bahaya Yang Terlihat Aman: Memahami Child Grooming</h3>
            <p class="text-slate-500 text-sm">Penjelasan mendalam oleh Prof. Dr. dr. Junita M. P., Sp.N(K) mengenai cara kerja manipulasi pelaku.</p>
        </div>

        <div class="video-card bg-blue-100 p-6 rounded-2xl border border-blue-200 shadow-sm">
            <div class="iframe-container">
                <iframe src="https://www.youtube.com/embed/2VpAUQ4OaDc" frameborder="0" allowfullscreen></iframe>
            </div>
            <h3 class="font-bold text-lg mt-5 mb-1 text-slate-800">2. Child Grooming & Kesehatan Jiwa Anak</h3>
            <p class="text-slate-500 text-sm">Diskusi komprehensif bersama Prof. Tjhin Wiguna mengenai dampak psikologis dan peran orang tua.</p>
        </div>

    </div>
</div>

</body>
</html>
