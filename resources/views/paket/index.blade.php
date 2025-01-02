<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Paket WiFi</title>
    <link rel="icon" type="image/png" href="{{ asset('img/logo_web.png') }}" />
</head>
<body>
    @include('layouts.navbar')
    <div class="container mx-auto px-4 py-10">
        <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">Detail Paket:</h1>
            <h2 class="text-2xl font-semibold bg-blue-200 rounded-lg py-2 px-4 text-gray-800 text-center">{{ $paket->nama_paket }}</h2>
            
            <div class="text-gray-700 mb-4">
                <p><strong>Kecepatan:</strong> {{ $paket->kecepatan }}</p>
                <p><strong>Harga Bulanan:</strong> Rp {{ number_format($paket->harga_bulanan, 0, ',', '.') }}</p>
                <p><strong>Deskripsi:</strong> {{ $paket->deskripsi }}</p>
            </div>
            
            <!-- Syarat dan Ketentuan -->
            <div class="bg-gray-100 p-4 rounded-lg mt-6">
                <h2 class="text-lg font-semibold text-gray-800 mb-3">Syarat dan Ketentuan</h2>
                <ul class="list-disc pl-5 text-gray-700">
                    <li>Harga sudah termasuk pajak.</li>
                    <li>Pembayaran dilakukan setiap bulan sebelum tanggal 10.</li>
                    <li>Kecepatan internet dapat bervariasi tergantung lokasi.</li>
                    <li>Paket hanya tersedia untuk wilayah yang tercover oleh jaringan kami.</li>
                    <li>Paket ini tidak dapat dibatalkan setelah pembayaran dilakukan.</li>
                    <li>Hubungi layanan pelanggan untuk informasi lebih lanjut.</li>
                </ul>
            </div>

            <p class="text-gray-600 text-sm mt-6">
                *Syarat dan Kondisi berlaku. Harga dapat berubah sewaktu-waktu.
            </p>
            
            <div class="text-center mt-6"></div>
                <a href="{{ route('paket.bayar', $paket->paket_id) }}" class="inline-block bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                Bayar Sekarang
                </a>
            </div>
            
            <div class="text-right mt-6">
                <a href="/paket" class="inline-block bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                Kembali ke daftar paket
                </a>
            </div>
        </div>
    </div>
</body>
    <footer class="bg-gray-800 text-white py-4 text-center">
        <p>&copy; {{ date('Y') }} WiFi-Q. All rights reserved.</p>
    </footer>
</html>
