@extends('layout.petugas')
@section('content-petugas')
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Input Setoran Sampah</h1>
        <p class="text-sm text-gray-500">Dashboard / <span class="text-green-600 font-semibold">Input Sampah</span></p>
    </div>

    <div class="max-w-2xl bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">
        <div class="bg-green-600 px-6 py-4">
            <h3 class="text-white font-semibold flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                </svg>
                Form Transaksi Baru
            </h3>
        </div>

        <form action="#" method="POST" class="p-6 space-y-5">
            @csrf

            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Pilih Warga</label>
                <select name="user_id"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 outline-none appearance-none bg-gray-50">
                    <option value="">-- Pilih Nama Warga --</option>
                    <option value="1">Budi Santoso (RT 01)</option>
                    <option value="2">Ani Wijaya (RT 03)</option>
                </select>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Jenis Sampah</label>
                    <select id="jenis_sampah" name="jenis_sampah"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 outline-none bg-gray-50">
                        <option value="0" data-harga="0">-- Pilih Jenis --</option>
                        <option value="plastik" data-harga="3000">Plastik (Rp 3.000)</option>
                        <option value="kertas" data-harga="2000">Kertas/Kardus (Rp 2.000)</option>
                        <option value="logam" data-harga="5000">Logam/Besi (Rp 5.000)</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Berat Sampah (kg)</label>
                    <input type="number" id="berat" name="berat" step="0.1"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 outline-none"
                        placeholder="0.0">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Harga per kg</label>
                    <input type="text" id="harga_kg"
                        class="w-full px-4 py-2 border border-gray-200 rounded-lg bg-gray-100 text-gray-500 cursor-not-allowed font-semibold"
                        readonly value="Rp 0">
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-1">Total Saldo</label>
                    <input type="text" id="total_harga"
                        class="w-full px-4 py-2 border border-gray-200 rounded-lg bg-green-50 text-green-700 font-bold cursor-not-allowed"
                        readonly value="Rp 0">
                </div>
            </div>

            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Tanggal Transaksi</label>
                <input type="text" name="tanggal"
                    class="w-full px-4 py-2 border border-gray-200 rounded-lg bg-gray-100 text-gray-500 cursor-not-allowed"
                    readonly value="{{ date('d F Y') }}">
            </div>

            <div class="pt-4">
                <button type="submit"
                    class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 rounded-xl shadow-lg transition duration-300 flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                    Simpan Transaksi
                </button>
            </div>
        </form>
    </div>

    <script>
        const jenisSampah = document.getElementById('jenis_sampah');
        const beratInput = document.getElementById('berat');
        const hargaKgInput = document.getElementById('harga_kg');
        const totalHargaInput = document.getElementById('total_harga');

        function hitungTotal() {
            const selectedOption = jenisSampah.options[jenisSampah.selectedIndex];
            const harga = parseFloat(selectedOption.getAttribute('data-harga')) || 0;
            const berat = parseFloat(beratInput.value) || 0;

            const total = harga * berat;

            hargaKgInput.value = "Rp " + harga.toLocaleString('id-ID');
            totalHargaInput.value = "Rp " + total.toLocaleString('id-ID');
        }

        jenisSampah.addEventListener('change', hitungTotal);
        beratInput.addEventListener('input', hitungTotal);
    </script>
@endsection
