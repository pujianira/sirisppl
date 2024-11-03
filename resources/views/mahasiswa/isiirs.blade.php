<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<x-app-layout>
    <x-slot name="header">
        <body class="bg-gradient-to-b from-blue-900 to-blue-700 min-h-screen flex flex-col items-center">
            <div class="w-1/4 p-4">
                <div class="bg-gray-700 p-4 rounded-lg mb-4">
                    <h1 class="text-lg font-semibold mb-2">SIRIS UNDIP</h1>
                    <p class="text-xs">Nama : NABILA BETARI ANJANI</p>
                    <p class="text-xs">NIM : 24060122140169</p>
                    <p class="text-xs">Th. Ajaran : 2024/2025</p>
                    <p class="text-xs">Ganjil/Genap : GANJIL</p>
                    <p class="text-xs">Matakuliah prioritas : SMT 4</p>
                    <p class="text-xs">IPk : 4,00</p>
                    <p class="text-xs">IPS (semester lalu) : 4,00</p>
                    <p class="text-xs">Max. Beban SKS (saat ini) : 24</p>
                </div>
                <button class="bg-blue-800 w-full py-2 rounded-lg mb-4 text-xs">Refresh IRS</button>
                <div class="bg-gray-700 p-3 rounded-lg mb-4 flex items-center">
                    <i class="fas fa-search text-lg mr-2"></i>
                    <span class="text-xs">Cari Mata Kuliah</span>
                </div>
                <button class="bg-blue-800 w-full py-2 rounded-lg text-xs">Mata Kuliah Terpilih</button>
            </div>
        </body>
    </x-slot>
</x-app-layout>
</html>