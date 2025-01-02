<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>WiFi-Q : Paket pilihan</title>
    <link rel="icon" type="image/png" href="{{ asset('img/logo_web.png') }}" />
</head>

<body class="bg-white text-gray-800">
    @include('layouts.navbar')
    <div class="min-h-screen flex flex-col container mx-auto p-4">
        <h1 class="text-4xl font-bold mb-6 text-center">Paket</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Paket Basic -->
            <div class="bg-gray-100 p-6 rounded-lg shadow-md flex flex-col justify-between">
                <div>
                    <div class="bg-gray-300 text-gray-800 font-bold py-1 px-3 rounded-full inline-block mb-4">Paket
                        Basic</div>
                    <div class="text-4xl font-bold mb-2">10 Mbps</div>
                    <ul class="text-left mb-4">
                        <li class="mb-2"><i class="fas fa-check-circle text-gray-600"></i> Unlimited kuota</li>
                        <li><i class="fas fa-check-circle text-gray-600"></i> Layanan Pelanggan 24/7</li>
                    </ul>
                </div>
                <a href="/paket/1"
                    class="text-xl font-bold bg-gray-200 py-2 px-4 rounded-lg mt-4 inline-block text-center">Rp 150.000
                    / Bulan</a>
            </div>
            <!-- Paket Standard -->
            <div class="bg-gray-200 p-6 rounded-lg shadow-md flex flex-col justify-between">
                <div>
                    <div class="bg-gray-500 text-white font-bold py-1 px-3 rounded-full inline-block mb-4">Paket
                        Standard</div>
                    <div class="text-4xl font-bold mb-2">20 Mbps</div>
                    <ul class="text-left mb-4">
                        <li class="mb-2"><i class="fas fa-check-circle text-gray-600"></i> Unlimited kuota</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-gray-600"></i> Gratis pemasangan</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-gray-600"></i> Layanan Pelanggan 24/7</li>
                        <li><i class="fas fa-check-circle text-gray-600"></i> Akses ke aplikasi streaming (1 Bulan
                            gratis)</li>
                    </ul>
                </div>
                <a href="/paket/2"
                    class="text-xl font-bold bg-gray-300 py-2 px-4 rounded-lg mt-4 inline-block text-center">Rp 250.000
                    / Bulan</a>
            </div>
            <!-- Paket Premium -->
            <div class="bg-gray-100 p-6 rounded-lg shadow-md flex flex-col justify-between">
                <div>
                    <div class="bg-gray-300 text-gray-800 font-bold py-1 px-3 rounded-full inline-block mb-4">Paket
                        Premium</div>
                    <div class="text-4xl font-bold mb-2">50 Mbps</div>
                    <ul class="text-left mb-4">
                        <li class="mb-2"><i class="fas fa-check-circle text-gray-600"></i> Unlimited kuota</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-gray-600"></i> Layanan pelanggan prioritas
                        </li>
                        <li><i class="fas fa-check-circle text-gray-600"></i> Bonus router dual-band</li>
                    </ul>
                </div>
                <a href="/paket/3"
                    class="text-xl font-bold bg-gray-200 py-2 px-4 rounded-lg mt-4 inline-block text-center">Rp 400.000
                    / Bulan</a>
            </div>
            <!-- Paket Ultra -->
            <div class="bg-gray-200 p-6 rounded-lg shadow-md flex flex-col justify-between">
                <div>
                    <div class="bg-gray-500 text-white font-bold py-1 px-3 rounded-full inline-block mb-4">Paket Ultra
                    </div>
                    <div class="text-4xl font-bold mb-2">100 Mbps</div>
                    <ul class="text-left mb-4">
                        <li class="mb-2"><i class="fas fa-check-circle text-gray-600"></i> Unlimited kuota</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-gray-600"></i> Gratis layanan TV kabel
                        </li>
                        <li class="mb-2"><i class="fas fa-check-circle text-gray-600"></i> Teknisi on-demand</li>
                        <li><i class="fas fa-check-circle text-gray-600"></i> Cashback 10% untuk pembayaran tahunan</li>
                    </ul>
                </div>
                <a href="/paket/4"
                    class="text-xl font-bold bg-gray-300 py-2 px-4 rounded-lg mt-4 inline-block text-center">Rp 700.000
                    / Bulan</a>
            </div>
            <!-- Paket Bisnis -->
            <div class="bg-gray-100 p-6 rounded-lg shadow-md flex flex-col justify-between">
                <div>
                    <div class="bg-gray-300 text-gray-800 font-bold py-1 px-3 rounded-full inline-block mb-4">Paket
                        Bisnis</div>
                    <div class="text-4xl font-bold mb-2">200 Mbps</div>
                    <ul class="text-left mb-4">
                        <li class="mb-2"><i class="fas fa-check-circle text-gray-600"></i> Unlimited kuota</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-gray-600"></i> Akses VPN gratis</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-gray-600"></i> Layanan prioritas khusus
                        </li>
                        <li><i class="fas fa-check-circle text-gray-600"></i> Uptime 99% SLA</li>
                    </ul>
                </div>
                <a href="/paket/5"
                    class="text-xl font-bold bg-gray-200 py-2 px-4 rounded-lg mt-4 inline-block text-center">Rp
                    1.500.000 / Bulan</a>
            </div>
        </div>
    </div>
</body>
<footer class="bg-gray-800 text-white py-4">
    <div class="container mx-auto text-center">
        <p>&copy; {{ date('Y') }} WiFi-Q. All rights reserved.</p>
    </div>
</footer>

</html>
