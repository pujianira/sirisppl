<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review IRS Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="bg-gradient-to-b from-gray-800 to-blue-900 text-white font-sans min-h-screen">
    <div class="flex h-full">
        <!-- Sidebar -->
        <div class="w-1/5 bg-gradient-to-b from-gray-900 to-gray-800 p-6">
            <div class="text-2xl font-bold mb-8">SIRIS UNDIP</div>
            <nav class="space-y-4">
                <a href="/dashboard" class="flex items-center space-x-2 text-gray-400 hover:text-white py-2 px-4">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </a>
                <a href="/perwalian" class="flex items-center space-x-2 text-white py-2 px-4">
                    <i class="fas fa-user-friends"></i>
                    <span>Perwalian</span>
                </a>
                <a href="#" class="flex items-center space-x-2 text-gray-400 hover:text-white py-2 px-4">
                    <i class="fas fa-edit"></i>
                    <span>Input Nilai</span>
                </a>
                <a href="#" class="flex items-center space-x-2 text-gray-400 hover:text-white py-2 px-4">
                    <i class="fas fa-book"></i>
                    <span>Bimbingan & Ujian</span>
                </a>
                <a href="#" class="flex items-center space-x-2 text-gray-400 hover:text-white py-2 px-4">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                </a>
                <a href="#" class="flex items-center space-x-2 text-gray-400 hover:text-white py-2 px-4">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Log Out</span>
                </a>
            </nav>
        </div>
        <!-- Main Content -->
        <div class="flex-1 p-6">
            <!-- Top Bar -->
            <div class="flex justify-between items-center mb-6">
                <div class="relative w-1/3">
                    <input type="text" placeholder="Search..." class="w-full p-2 rounded-full bg-gray-700 text-gray-300 placeholder-gray-400 focus:outline-none">
                    <i class="fas fa-search absolute top-2 right-4 text-gray-400"></i>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-user"></i>
                        <span>SUTIKNO</span>
                    </div>
                    <i class="fas fa-cog"></i>
                    <i class="fas fa-bell"></i>
                </div>
            </div>
            <!-- Breadcrumb -->
            <div class="text-gray-400 mb-6">HOME / IRS</div>
            <!-- Content -->
            <div>
                <h1 class="text-2xl font-bold mb-4">Review IRS Mahasiswa</h1>
                <div class="flex space-x-4 mb-4">
                    <div class="flex items-center space-x-2">
                        <span>Angkatan :</span>
                        <select class="p-2 rounded bg-gray-700 text-gray-300">
                            <option>2017</option>
                            <option>2018</option>
                            <option>2019</option>
                            <option>2020</option>
                            <option>2021</option>
                            <option>2022</option>
                            <option>2023</option>
                            <option>2024</option>
                        </select>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span>Prodi :</span>
                        <select class="p-2 rounded bg-gray-700 text-gray-300">
                            <option>Informatika S1</option>
                        </select>
                    </div>
                    <button class="px-4 py-2 bg-blue-600 rounded text-white">Filter Data</button>
                    <button class="px-4 py-2 bg-gray-600 rounded text-white">Reset Filter</button>
                </div>
                <p class="text-gray-400 mb-4">*Memberikan izin melakukan perubahan IRS berarti dianggap telah menyetujui IRS mahasiswa sekaligus mengizinkan mahasiswa melakukan perubahan IRS pada periode penggantian IRS.</p>
                <p class="text-gray-400 mb-4">TOTAL : 42</p>

                <!-- Table -->
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-gray-800 rounded-lg">
                        <thead>
                            <tr class="text-left text-gray-400">
                                <th class="p-4">NIM</th>
                                <th class="p-4">Nama</th>
                                <th class="p-4">Fakultas</th>
                                <th class="p-4">Prodi</th>
                                <th class="p-4">TA/Smt</th>
                                <th class="p-4">Status Approval</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-300">
                            <tr class="border-b border-gray-700">
                                <td class="p-4 flex items-center space-x-2">
                                    <button class="px-4 py-2 bg-blue-600 rounded text-white">Review</button>
                                    <span>24060122130097</span>
                                </td>
                                <td class="p-4">AURA ARFANINSA AZ ZAHRA</td>
                                <td class="p-4">FSM</td>
                                <td class="p-4">S1 INFORMATIKA</td>
                                <td class="p-4">2022/5</td>
                                <td class="p-4">
                                    <span class="px-2 py-1 bg-orange-500 rounded text-white">Belum Disetujui</span>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-700">
                                <td class="p-4 flex items-center space-x-2">
                                    <button class="px-4 py-2 bg-blue-600 rounded text-white">Review</button>
                                    <span>24060122130067</span>
                                </td>
                                <td class="p-4">PUJIANI RAHAYU AGUSTIN</td>
                                <td class="p-4">FSM</td>
                                <td class="p-4">S1 INFORMATIKA</td>
                                <td class="p-4">2022/5</td>
                                <td class="p-4">
                                    <span class="px-2 py-1 bg-orange-500 rounded text-white">Belum Disetujui</span>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-700">
                                <td class="p-4 flex items-center space-x-2">
                                    <button class="px-4 py-2 bg-blue-600 rounded text-white">Review</button>
                                    <span>24060122140169</span>
                                </td>
                                <td class="p-4">NABILA BETARI ANJANI</td>
                                <td class="p-4">FSM</td>
                                <td class="p-4">S1 INFORMATIKA</td>
                                <td class="p-4">2022/5</td>
                                <td class="p-4">
                                    <span class="px-2 py-1 bg-orange-500 rounded text-white">Belum Disetujui</span>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-700">
                                <td class="p-4 flex items-center space-x-2">
                                    <button class="px-4 py-2 bg-blue-600 rounded text-white">Review</button>
                                    <span>24060122130085</span>
                                </td>
                                <td class="p-4">MEYTA RIZKI KHAIRUNISA</td>
                                <td class="p-4">FSM</td>
                                <td class="p-4">S1 INFORMATIKA</td>
                                <td class="p-4">2022/5</td>
                                <td class="p-4">
                                    <span class="px-2 py-1 bg-orange-500 rounded text-white">Belum Disetujui</span>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-700">
                                <td class="p-4 flex items-center space-x-2">
                                    <button class="px-4 py-2 bg-blue-600 rounded text-white">Review</button>
                                    <span>24060122120023</span>
                                </td>
                                <td class="p-4">HAPPY DESITA WIDYANTARI</td>
                                <td class="p-4">FSM</td>
                                <td class="p-4">S1 INFORMATIKA</td>
                                <td class="p-4">2022/5</td>
                                <td class="p-4">
                                    <span class="px-2 py-1 bg-green-500 rounded text-white">Disetujui</span>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-700">
                                <td class="p-4 flex items-center space-x-2">
                                    <button class="px-4 py-2 bg-blue-600 rounded text-white">Review</button>
                                    <span>24060122140123</span>
                                </td>
                                <td class="p-4">ALYA SAFINA</td>
                                <td class="p-4">FSM</td>
                                <td class="p-4">S1 INFORMATIKA</td>
                                <td class="p-4">2022/5</td>
                                <td class="p-4">
                                    <span class="px-2 py-1 bg-green-500 rounded text-white">Disetujui</span>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-700">
                                <td class="p-4 flex items-center space-x-2">
                                    <button class="px-4 py-2 bg-blue-600 rounded text-white">Review</button>
                                    <span>24060122130049</span>
                                </td>
                                <td class="p-4">SYAKIRA NADA NIRWANA</td>
                                <td class="p-4">FSM</td>
                                <td class="p-4">S1 INFORMATIKA</td>
                                <td class="p-4">2022/5</td>
                                <td class="p-4">
                                    <span class="px-2 py-1 bg-green-500 rounded text-white">Disetujui</span>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-700">
                                <td class="p-4 flex items-center space-x-2">
                                    <button class="px-4 py-2 bg-blue-600 rounded text-white">Review</button>
                                    <span>24060122130063</span>
                                </td>
                                <td class="p-4">KEISYA INTAN NABILA</td>
                                <td class="p-4">FSM</td>
                                <td class="p-4">S1 INFORMATIKA</td>
                                <td class="p-4">2022/5</td>
                                <td class="p-4">
                                    <span class="px-2 py-1 bg-green-500 rounded text-white">Disetujui</span>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-700">
                                <td class="p-4 flex items-center space-x-2">
                                    <button class="px-4 py-2 bg-blue-600 rounded text-white">Review</button>
                                    <span>24060122130055</span>
                                </td>
                                <td class="p-4">ASY'SYIFA SHABRINA MUNIR</td>
                                <td class="p-4">FSM</td>
                                <td class="p-4">S1 INFORMATIKA</td>
                                <td class="p-4">2022/5</td>
                                <td class="p-4">
                                    <span class="px-2 py-1 bg-green-500 rounded text-white">Disetujui</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>