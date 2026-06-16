<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Edukasi - MindEdu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        
        .video-card { 
            transition: all 0.4s ease; 
            margin-bottom: 40px; /* Jarak antar video */
        }
        .video-card:hover { transform: scale(1.01); }
        .iframe-container { 
            position: relative; 
            padding-bottom: 56.25%; 
            height: 0; 
            overflow: hidden; 
            border-radius: 16px;
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
<body class="bg-slate-50 text-slate-800">

<div class="max-w-4xl mx-auto px-6 py-10">
    <header class="flex justify-between items-center pb-8 border-b border-slate-200 mb-10">
        <div class="text-3xl font-bold text-indigo-600"><a href="index.php">❀ BinaRuang.id</a></div>
        <nav class="flex gap-4">
            <a href="index.php" class="px-4 py-2 border rounded-lg hover:bg-slate-100">Beranda</a>
        </nav>
    </header>

    <a href="index.php" class="inline-block mb-6 text-sm font-semibold text-slate-500 hover:text-indigo-600 transition">← Kembali ke Beranda</a>
    
    <div class="mb-12">
        <h1 class="text-4xl font-extrabold mb-4">Video Edukasi Waspada Cybercrime </h1>
        <p class="text-lg text-slate-600">Jelajahi panduan visual mengenai deteksi dini dan perlindungan anak di dunia digital.</p>
    </div>

    <div class="flex flex-col">
        
        <div class="video-card bg-white p-6 rounded-3xl border border-slate-100">
            <div class="iframe-container">
                <iframe src="https://www.youtube.com/embed/W3jEwZq6mwc" frameborder="0" allowfullscreen></iframe>
            </div>
            <h3 class="font-bold text-xl mt-6 mb-2">1. Bahaya Yang Terlihat Aman: Memahami Child Grooming</h3>
            <p class="text-slate-600">Penjelasan mendalam oleh Prof. Dr. dr. Junita M. P., Sp.N(K) mengenai cara kerja manipulasi pelaku.</p>
        </div>

        <div class="video-card bg-white p-6 rounded-3xl border border-slate-100">
            <div class="iframe-container">
                <iframe src="https://www.youtube.com/embed/2VpAUQ4OaDc" frameborder="0" allowfullscreen></iframe>
            </div>
            <h3 class="font-bold text-xl mt-6 mb-2">2. Child Grooming & Kesehatan Jiwa Anak</h3>
            <p class="text-slate-600">Diskusi komprehensif bersama Prof. Tjhin Wiguna mengenai dampak psikologis dan peran orang tua.</p>
        </div>

    </div>
</div>

</body>
</html>