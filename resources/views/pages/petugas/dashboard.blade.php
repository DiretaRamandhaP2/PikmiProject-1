@extends('layout.petugas')
@section('content-petugas')

    <div class="mt-8">
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-gray-800">Selamat Bekerja, Rahmat!</h1>
            <p class="text-gray-500 italic">"Lingkungan bersih dimulai dari tangan kita."</p>
        </div>

        <div class="grid grid-cols-1 gap-6 max-w-4xl">

            <div
                class="bg-white p-8 rounded-2xl shadow-sm border-l-8 border-green-500 flex items-center justify-between transition transform hover:scale-[1.01]">
                <div>
                    <p class="text-lg font-medium text-gray-500 mb-1">Transaksi Hari Ini</p>
                    <h3 class="text-5xl font-black text-gray-800">25</h3>
                    <p class="text-sm text-green-600 mt-2 font-semibold">↑ 5 dari kemarin</p>
                </div>
                <div class="text-6xl opacity-20">📝</div>
            </div>

            <div
                class="bg-white p-8 rounded-2xl shadow-sm border-l-8 border-blue-500 flex items-center justify-between transition transform hover:scale-[1.01]">
                <div>
                    <p class="text-lg font-medium text-gray-500 mb-1">Total Sampah Terkumpul</p>
                    <h3 class="text-5xl font-black text-gray-800">75 <span
                            class="text-2xl font-normal text-gray-400">kg</span></h3>
                    <p class="text-sm text-blue-600 mt-2 font-semibold">Sangat Bagus!</p>
                </div>
                <div class="text-6xl opacity-20">♻️</div>
            </div>

        </div>

        <div class="mt-10">
            <a href="#"
                class="inline-flex items-center px-6 py-3 bg-green-600 hover:bg-green-700 text-white font-bold rounded-xl shadow-lg transition duration-300 group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 group-hover:rotate-90 transition-transform"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Input Setoran Sampah Baru
            </a>
        </div>
    </div>
@endsection
