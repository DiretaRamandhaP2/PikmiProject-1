<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Sistem Manajemen Sampah</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <header class="bg-white shadow-sm border-b border-gray-200 fixed w-full z-10">
        <div class="px-6 py-3 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <div class="bg-green-600 p-1.5 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </div>
                <span class="text-xl font-bold text-gray-800 tracking-tight">E-Waste</span>
            </div>

            <div class="flex items-center space-x-4">
                <div class="flex items-center space-x-2">
                    <span class="text-sm font-medium text-gray-600">Halo, <span class="text-green-600 font-bold">Admin</span></span>
                    <div class="h-8 w-8 rounded-full bg-gray-300 overflow-hidden border border-gray-400">
                        <img src="https://ui-avatars.com/api/?name=Admin&background=059669&color=fff" alt="Avatar">
                    </div>
                </div>
                <form action="" method="POST">
                    @csrf
                    <button type="submit" class="text-sm font-semibold text-red-500 hover:text-red-700 transition">Logout</button>
                </form>
            </div>
        </div>
    </header>

    <div class="flex pt-14">
        <aside class="w-64 bg-white h-screen border-r border-gray-200 fixed overflow-y-auto">
            <nav class="mt-6 px-4 space-y-2">
                <a href="{{ route('petugas') }}" class="flex items-center space-x-3 p-3 bg-green-50 text-green-700 rounded-lg font-semibold">
                    <span>🏠</span> <span>Dashboard</span>
                </a>
                <a href="{{ route('input-sampah') }}" class="flex items-center space-x-3 p-3 text-gray-600 hover:bg-gray-100 rounded-lg transition">
                    <span>♻️</span> <span>Input Sampah</span>
                </a>
                <a href="#" class="flex items-center space-x-3 p-3 text-gray-600 hover:bg-gray-100 rounded-lg transition">
                    <span>💸</span> <span>Data Transaksi</span>
                </a>
                <a href="#" class="flex items-center space-x-3 p-3 text-gray-600 hover:bg-gray-100 rounded-lg transition">
                    <span>📈</span> <span>Statistik</span>
                </a>

            </nav>
        </aside>


        <main class="ml-64 p-8 w-full">
            @yield('content-petugas')
        </main>
    </div>

</body>
</html>
