<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Grafis - BinaRuang.id</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .tab-content { display: none; }
        .tab-content.active { display: block; animation: fadeIn 0.5s; }
        @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
        .diagram-node { transition: transform 0.3s ease; }
        .diagram-node:hover { transform: scale(1.05); }
    </style>
</head>
<body class="bg-slate-50 text-slate-800">

<div class="max-w-5xl mx-auto p-6">
    <a href="index.php" class="inline-block mb-6 text-indigo-600 font-semibold">← Kembali ke Beranda</a>
    
    <h1 class="text-3xl font-bold mb-8">Pusat Informasi Visual 📊</h1>

    <div class="flex flex-wrap gap-2 mb-10">
        <button onclick="showTab('tab1')" class="px-4 py-2 bg-white border rounded-lg font-medium shadow-sm hover:bg-indigo-50">Untuk Orang Tua</button>
        <button onclick="showTab('tab2')" class="px-4 py-2 bg-indigo-600 text-white rounded-lg font-medium shadow-md">Keamanan Digital</button>
    </div>

    <div id="tab2" class="tab-content active">
        <div class="bg-white p-8 rounded-2xl border shadow-sm">
            <h2 class="text-2xl font-bold mb-6 text-center">Pola Grooming di Platform Digital</h2>
            
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-4">
                    <div class="diagram-node p-4 bg-blue-50 border-l-4 border-blue-500 rounded shadow-sm">
                        <strong class="text-blue-700">1. Kontak & Kepercayaan</strong>
                        <p class="text-sm">Membangun awal hubungan melalui game online.</p>
                    </div>
                    <div class="diagram-node p-4 bg-sky-50 border-l-4 border-sky-500 rounded shadow-sm">
                        <strong class="text-sky-700">2. Membangun Kedekatan</strong>
                        <p class="text-sm">Memberikan perhatian lebih untuk manipulasi emosional.</p>
                    </div>
                    <div class="diagram-node p-4 bg-purple-50 border-l-4 border-purple-500 rounded shadow-sm">
                        <strong class="text-purple-700">3. Isolasi & Kontrol</strong>
                        <p class="text-sm">Menjauhkan korban dari teman atau orang tua.</p>
                    </div>
                </div>

                <div class="relative w-64 h-64 mx-auto border-4 border-dashed border-slate-200 rounded-full flex items-center justify-center text-center p-4">
                    <div class="font-bold text-slate-700">
                        Ciri Chat Manipulatif (Red Flags)
                    </div>
                    <div class="absolute -top-4 bg-amber-100 p-2 rounded-full text-xs font-semibold">Rahasia</div>
                    <div class="absolute -bottom-4 bg-red-100 p-2 rounded-full text-xs font-semibold">Ancaman</div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function showTab(tabId) {
        document.querySelectorAll('.tab-content').forEach(t => t.classList.remove('active'));
        document.getElementById(tabId).classList.add('active');
    }
</script>
</body>
</html>