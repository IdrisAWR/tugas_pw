<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>WiFi-Q : Pembayaran/Tagihan</title>
    <link rel="icon" type="image/png" href="{{ asset('img/logo_web.png') }}" />
</head>

<body>
    @include('layouts.navbar')
    <div class="min-h-screen flex flex-col container mx-auto p-6 bg-white rounded-lg shadow-md">
        <h1 class="text-2xl text-center font-bold mb-6">Tagihan Pembayaran</h1>

        @if ($paket === 0)
            <div class="text-center p-6 bg-red-100 border border-red-400 text-red-700 rounded-lg">
                <p class="text-2xl font-semibold">Belum ada tagihan pembayaran</p>
            </div>
        @else
            <!-- Paket Detail -->
            <div class="mb-6 bg-white rounded-lg shadow-md p-6">
                <h2 class="text-lg border-b border-gray-800 pb-2 font-semibold">Detail Paket</h2>
                <ul class="mt-2">
                    <li class="flex items-center"><strong>Nama Paket:</strong> <span
                            class="ml-2">{{ $paket->nama_paket }}</span></li>
                    <li class="flex items-center"><strong>Kecepatan:</strong> <span
                            class="ml-2">{{ $paket->kecepatan }} Mbps</span></li>
                    <li class="flex items-center"><strong>Harga Bulanan:</strong> <span
                            class="ml-2">Rp{{ number_format($paket->harga_bulanan, 0, ',', '.') }}</span></li>
                    <li class="flex"><strong>Deskripsi:</strong> <span class="ml-2">{{ $paket->deskripsi }}</span>
                    </li>
                </ul>
            </div>

            <!-- Form Pembayaran -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <form action="{{ route('pembayaran.proses') }}" method="POST">
                    @csrf
                    <input type="hidden" name="paket_id" value="{{ $paket->paket_id }}">
                    <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                    <input type="hidden" name="jumlah" value="{{ $totalPembayaran }}">
                    <div class="mb-3">
                        <strong>Status:</strong>
                        <select name="status" id="status" class="border rounded-lg px-2 py-1 w-full">
                            <option value="lunas" class="text-green-600 font-semibold">Lunas</option>
                            <option value="belum_lunas" class="text-red-600 font-semibold">Belum Lunas</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="periode_pembayaran" class="block font-medium">Periode Pembayaran</label>
                        <select name="periode_pembayaran" id="periode_pembayaran" class="w-full p-2 border rounded-lg"
                            onchange="hitungTotalPembayaran()">
                            <option value="1">1 Bulan</option>
                            <option value="3">3 Bulan</option>
                            <option value="6">6 Bulan</option>
                            <option value="12">12 Bulan</option>
                        </select>
                    </div>

                    <div class="mb-6">
                        <strong>Total Pembayaran:</strong> <span id="total-pembayaran"
                            class="text-2xl font-bold">Rp{{ number_format($paket->harga_bulanan, 0, ',', '.') }}</span>
                    </div>

                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg">
                        Bayar
                    </button>
                </form>
            </div>
        @endif
    </div>
</body>
<script>
    function hitungTotalPembayaran() {
        var periode = document.getElementById('periode_pembayaran').value;
        var totalPembayaran = {{ $paket->harga_bulanan }} * periode;
        document.getElementById('total-pembayaran').innerHTML = 'Rp' + totalPembayaran.toLocaleString('id-ID');
    }
</script>
<footer class="bg-gray-800 text-white py-4 text-center fixed-bottom">
    <p>&copy; {{ date('Y') }} WiFi-Q. All rights reserved.</p>
</footer>

</html>
