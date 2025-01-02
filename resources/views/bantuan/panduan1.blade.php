<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WiFi-Q : Pembayaran/Tagihan</title>
    <link rel="icon" type="image/png" href="{{ asset('img/logo_web.png') }}" />
</head>
<body>
    @include('index.navbar')
    <header class="bg-blue-600 text-white py-4 text-center">
        <h1 class="text-2xl font-bold">Cara Mengubah Metode Pembayaran WiFi</h1>
    </header>
    <main class="max-w-4xl mx-auto mt-6 p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Langkah-langkah</h2>
        <ol class="list-decimal list-inside space-y-3">
            <li>
                <strong>Masuk ke Akun Penyedia Layanan:</strong>
                <p>Buka aplikasi atau situs web penyedia layanan WiFi Anda, lalu masuk dengan akun yang terdaftar.</p>
            </li>
            <li>
                <strong>Buka Menu Pengaturan Pembayaran:</strong>
                <p>Setelah berhasil masuk, cari dan buka bagian <em>Pengaturan Pembayaran</em> atau <em>Billing</em>.</p>
            </li>
            <li>
                <strong>Pilih Metode Pembayaran Baru:</strong>
                <p>Pilih metode pembayaran yang ingin Anda gunakan, seperti kartu kredit, e-wallet, atau transfer bank.</p>
            </li>
            <li>
                <strong>Masukkan Detail Pembayaran:</strong>
                <p>Masukkan informasi yang diperlukan, seperti nomor kartu atau akun e-wallet.</p>
            </li>
            <li>
                <strong>Konfirmasi dan Simpan:</strong>
                <p>Periksa kembali informasi yang telah Anda masukkan, lalu klik <em>Simpan</em> atau <em>Konfirmasi</em>.</p>
            </li>
        </ol>
        <br>

        <h2 class="text-2xl font-semibold mb-4">Tips dan Catatan</h2>
        <ul class="list-disc list-inside space-y-2">
            <li>Pastikan metode pembayaran yang dipilih memiliki saldo atau cukup untuk membayar tagihan.</li>
            <li>Jika mengalami kesulitan, hubungi layanan pelanggan penyedia WiFi Anda.</li>
        </ul>

        <h2 class="text-xl font-semibold mb-4">Kesimpulan</h2>
        <p>Mengubah metode pembayaran WiFi sangat mudah dan dapat dilakukan dalam beberapa menit. Dengan mengikuti langkah-langkah di atas, Anda dapat memilih metode pembayaran yang paling sesuai dengan kebutuhan Anda.</p>
    </main>
</body>
<footer class="bg-gray-800 text-white py-4 text-center fixed-bottom">
    <p>&copy; {{ date('Y') }} WiFi-Q. All rights reserved.</p>
</footer>
</html>