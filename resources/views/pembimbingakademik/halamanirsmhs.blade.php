<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIRIS UNDIP</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="bg-gradient-to-b from-blue-900 to-blue-800 text-white font-sans">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-1/4 bg-gradient-to-b from-gray-800 to-gray-700 p-6">
            <div class="text-2xl font-bold mb-8">SIRIS UNDIP</div>
            <nav class="space-y-4">
                <a href="#" class="flex items-center space-x-2 text-gray-300 hover:text-white">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </a>
                <a href="#" class="flex items-center space-x-2 text-gray-300 hover:text-white">
                    <i class="fas fa-user-friends"></i>
                    <span>Perwalian</span>
                </a>
                <a href="#" class="flex items-center space-x-2 text-gray-300 hover:text-white">
                    <i class="fas fa-file-alt"></i>
                    <span>Input Nilai</span>
                </a>
                <a href="#" class="flex items-center space-x-2 text-gray-300 hover:text-white">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <span>Bimbingan & Ujian</span>
                </a>
                <a href="#" class="flex items-center space-x-2 text-gray-300 hover:text-white">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                </a>
                <a href="#" class="flex items-center space-x-2 text-gray-300 hover:text-white">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Log Out</span>
                </a>
            </nav>
        </div>
        <!-- Main Content -->
        <div class="flex-1 p-6">
            <!-- Header -->
            <div class="flex justify-between items-center mb-8">
                <div class="relative w-1/2">
                    <input type="text" placeholder="Search..." class="w-full p-2 pl-10 rounded-full bg-gray-700 text-gray-300 focus:outline-none">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="bg-gray-700 p-2 rounded-full">
                        <i class="fas fa-user text-gray-300"></i>
                        <span class="ml-2">SUTIKNO</span>
                    </div>
                    <i class="fas fa-cog text-gray-300"></i>
                    <i class="fas fa-bell text-gray-300"></i>
                </div>
            </div>
            <!-- Breadcrumb -->
            <div class="text-sm text-gray-400 mb-4">
                HOME / <span class="text-green-400">IRS</span>
            </div>
            <!-- Content -->
            <div>
                <h1 class="text-2xl font-bold mb-4">Review IRS Mahasiswa</h1>
                <div class="flex space-x-8 mb-4">
                    <a href="#" class="border-b-2 border-white pb-2">IRS</a>
                    <a href="#" class="text-gray-400">KHS</a>
                    <a href="#" class="text-gray-400">TRANSKRIP</a>
                </div>
                <div>
                    <h2 class="text-xl font-semibold mb-4">Isian Rencana Semester (IRS)</h2>
                    <ul class="space-y-4">
                        <li class="border-b border-gray-600 pb-2">
                            <div>Semester-1 | Tahun Ajaran 2022/2023 Ganjil</div>
                            <div class="text-gray-400">Jumlah SKS : 21</div>
                        </li>
                        <li class="border-b border-gray-600 pb-2">
                            <div>Semester-2 | Tahun Ajaran 2022/2023 Genap</div>
                            <div class="text-gray-400">Jumlah SKS : 24</div>
                        </li>
                        <li class="border-b border-gray-600 pb-2">
                            <div>Semester-3 | Tahun Ajaran 2023/2024 Ganjil</div>
                            <div class="text-gray-400">Jumlah SKS : 24</div>
                        </li>
                        <li class="border-b border-gray-600 pb-2">
                            <div>Semester-4 | Tahun Ajaran 2023/2024 Genap</div>
                            <div class="text-gray-400">Jumlah SKS : 18</div>
                        </li>
                        <li class="border-b border-gray-600 pb-2">
                            <div>Semester-5 | Tahun Ajaran 2024/2025 Ganjil</div>
                            <div class="text-gray-400">Jumlah SKS : 19</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>