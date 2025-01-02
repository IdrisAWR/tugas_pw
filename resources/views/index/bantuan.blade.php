<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WiFi-Q : Bantuan dan Panduan</title>
    <link rel="icon" type="image/png" href="{{ asset('img/logo_web.png') }}" />
</head>
<body>
<body class="bg-white text-gray-900">
    @include('index.navbar')
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-6">Bantuan</h1>
        
        <div class="mb-8">
            <h2 class="text-xl font-semibold mb-4">Kontak Kami</h2>
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center">
                    <div class="bg-gray-200 p-3 rounded-lg px-3 py-2 mr-4">
                        <a href="#" class="fas fa-envelope text-2xl"></a>
                    </div>
                    <div>
                        <a href="#" class="font-semibold">Email Support</a>
                        <p class="text-gray-600">Senin-Sabtu, Jam 07.00 - 15.00 WIB</p>
                    </div>
                </div>
                <a href="#" class="text-xl"><i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center">
                    <div class="bg-gray-200 p-3 rounded-lg px-3 py-2 mr-4">
                        <a href="#" class="fas fa-comments text-2xl"></a>
                    </div>
                    <div>
                        <a href="#" class="font-semibold">Chat with us</a>
                        <p class="text-gray-600">Senin-Sabtu, Jam 07.00 - 15.00 WIB</p>
                    </div>
                </div>
                <a href="#" class="text-xl"><i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center">
                    <div class="bg-gray-200 p-3 rounded-lg px-3 py-2 mr-4">
                        <a href="#" class="fas fa-phone text-2xl"></a>
                    </div>
                    <div>
                        <a href="#" class="font-semibold">Call us</a>
                        <p class="text-gray-600">Senin-Sabtu, Jam 07.00 - 15.00 WIB</p>
                    </div>
                </div>
                <a href="#" class="text-xl"><i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
        
        <div>
            <h2 class="text-xl font-semibold mb-4">Panduan</h2>
            <div class="flex items-center justify-between mb-4">
                <a href="/bantuan/panduan1">Bagaimana cara mengubah metode pembayaran ?</a>
                <a href="/bantuan/panduan1" class="text-xl"><i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="flex items-center justify-between mb-4">
                <a href="#">Bagaimana cara membayar WiFi ?</a>
                <a href="#" class="text-xl"><i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="flex items-center justify-between mb-4">
                <a href="#">Saya tidak dapat masuk ke akun</a>
                <a href="#" class="text-xl"><i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</body>
    <footer class="bg-gray-800 text-white py-4 text-center">
        <p>&copy; {{ date('Y') }} WiFi-Q. All rights reserved.</p>
    </footer>
</html>
