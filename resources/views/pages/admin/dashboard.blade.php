@extends('layout.admin')
@section('content')
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Dashboard Overview</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Total Warga</p>
                <h3 class="text-3xl font-bold text-gray-800">120</h3>
            </div>
            <div class="text-4xl bg-blue-50 p-3 rounded-full">👥</div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Total Jenis Sampah</p>
                <h3 class="text-3xl font-bold text-gray-800">5</h3>
            </div>
            <div class="text-4xl bg-yellow-50 p-3 rounded-full">♻️</div>
        </div>
    </div>

    <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-200 text-center">
        <p class="text-lg font-medium text-gray-500 mb-2">Total Sampah Terkumpul</p>
        <h2 class="text-5xl font-black text-green-600">450 <span class="text-2xl font-normal text-gray-400">kg</span></h2>

        <div class="mt-6 w-full bg-gray-200 rounded-full h-4">
            <div class="bg-green-500 h-4 rounded-full" style="width: 75%"></div>
        </div>
        <p class="text-xs text-gray-400 mt-2 italic">*Target bulan ini: 600 kg</p>
    </div>
@endsection
