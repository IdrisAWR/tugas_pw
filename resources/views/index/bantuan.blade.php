<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>WiFi-Q : Bantuan dan Panduan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" type="image/png" href="{{ asset('img/logo_web.png') }}" />
</head>

<body>

    <body class="bg-white text-gray-900">
        @include('layouts.navbar')
        <div class="min-h-screen flex flex-col container mx-auto p-4">
            <h1 class="text-3xl font-bold mb-6">Bantuan</h1>

            <div class="mb-8">
                <h2 class="text-xl font-semibold mb-4">Kontak Kami</h2>
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        <div class="bg-gray-200 p-3 rounded-lg px-3 py-2 mr-4">
                            <a href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=chelsiunited@gmail.com" class="fas fa-envelope text-2xl"></a>
                        </div>
                        <div>
                            <a href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=chelsiunited@gmail.com" class="font-semibold">Email Support</a>
                            <p class="text-gray-600">Senin-Sabtu, Jam 07.00 - 15.00 WIB</p>
                        </div>
                    </div>
                    <a href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=chelsiunited@gmail.com" class="text-xl"><i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        <div class="bg-gray-200 p-3 rounded-lg px-3 py-2 mr-4">
                            <a href="https://wa.me/18002428478" class="fas fa-comments text-2xl"></a>
                        </div>
                        <div>
                            <a href="https://wa.me/18002428478" class="font-semibold">Chat with us</a>
                            <p class="text-gray-600">Senin-Sabtu, Jam 07.00 - 15.00 WIB</p>
                        </div>
                    </div>
                    <a href="https://wa.me/18002428478" class="text-xl"><i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        <div class="bg-gray-200 p-3 rounded-lg px-3 py-2 mr-4">
                            <a href="https://wa.me/18002428478" class="fas fa-phone text-2xl"></a>
                        </div>
                        <div>
                            <a href="https://wa.me/18002428478" class="font-semibold">Call us</a>
                            <p class="text-gray-600">Senin-Sabtu, Jam 07.00 - 15.00 WIB</p>
                        </div>
                    </div>
                    <a href="https://wa.me/18002428478" class="text-xl"><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div>
                <main class="container mx-auto my-8 px-4">
                    <section class="bg-white shadow-md rounded-lg p-6">
                        <h2 class="text-xl font-semibold mb-4">Panduan</h2>
                        <div class="space-y-4">
                        <!-- Panduan 1 -->
                        <div>
                            <h3 class="text-lg font-medium text-blue-800 cursor-pointer hover:underline" id="guide1">
                            Bagaimana cara mengubah metode pembayaran?
                            </h3>
                                <div id="content1" class="hidden mt-2 text-gray-800">
                            <ol class="list-decimal pl-6 space-y-2">
                                <li>Masuk ke akun Anda di website.</li>
                                <li>Klik menu "Pengaturan Pembayaran".</li>
                                <li>Pilih metode pembayaran yang ingin diubah.</li>
                                <li>Masukkan detail metode baru dan simpan.</li>
                            </ol>
                            </div>
                        </div>
            
                        <!-- Panduan 2 -->
                        <div>
                            <h3 class="text-lg font-medium text-blue-800 cursor-pointer hover:underline" id="guide2">
                            Bagaimana cara membayar WiFi?
                            </h3>
                            <div id="content2" class="hidden mt-2 text-gray-800">
                                <ol class="list-decimal pl-6 space-y-2">
                                    <li>Masuk ke akun Anda.</li>
                                    <li>Pilih menu "Bayar Tagihan".</li>
                                    <li>Pilih paket WiFi yang ingin dibayar.</li>
                                    <li>Pilih metode pembayaran dan selesaikan transaksi.</li>
                                </ol>
                            </div>
                        </div>
            
                        <!-- Panduan 3 -->
                        <div>
                            <h3 class="text-lg font-medium text-blue-800 cursor-pointer hover:underline" id="guide3">
                                Saya tidak dapat masuk ke akun
                            </h3>
                            <div id="content3" class="hidden mt-2 text-gray-800">
                                <p class="font-semibold">Penyebab Umum:</p>
                                <ul class="list-disc pl-6 space-y-2">
                                    <li>Lupa kata sandi: Klik "Lupa Kata Sandi" dan ikuti proses reset.</li>
                                    <li>Akun terkunci: Hubungi dukungan pelanggan untuk bantuan.</li>
                                </ul>
                                <p class="mt-2 font-semibold">Tips:</p>
                                <ul class="list-disc pl-6 space-y-2">
                                    <li>Pastikan email dan kata sandi benar.</li>
                                    <li>Gunakan perangkat yang sering Anda gunakan untuk menghindari verifikasi tambahan.</li>
                                </ul>
                            </div>
                        </div>
                        </div>
                    </section>
                </main>
            </div>
        </div>
    </body>
    <!-- Footer -->
<footer class="bg-gray-800 text-white py-4">
    <div class="container mx-auto text-center">
        <p>&copy; {{ date('Y') }} WiFi-Q. All rights reserved.</p>
    </div>
</footer>

<!-- Script untuk Toggle Konten -->
<script>
    document.querySelectorAll('h3').forEach((header) => {
        header.addEventListener('click', () => {
            const content = document.getElementById('content' + header.id.replace('guide', ''));
            if (content) {
                content.classList.toggle('hidden');
            }
        });
    });
</script>
</html>
