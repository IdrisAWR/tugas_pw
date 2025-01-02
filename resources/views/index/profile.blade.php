<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WiFi-Q : Profile Akun</title>
    <link rel="icon" type="image/png" href="{{ asset('img/logo_web.png') }}" />
</head>

<body>
    @include('layouts.navbar')
    <div class="min-h-screen flex flex-col container mx-auto p-4">
        <h1 class="text-2xl text-center font-bold mb-4">Profile</h1>
        <div class="bg-white p-4 rounded-lg shadow-md">
            <p class="border-b border-gray-300 pb-2">Welcome, {{ Auth::user()->name }}!</p>
            <div class="flex items-center justify-between border-b border-gray-300 py-2">
                <p class="text-gray-600">Email:</p>
                <p class="font-semibold">{{ Auth::user()->email }}</p>
            </div>
            <div class="flex items-center justify-between border-b border-gray-300 py-2">
                <p class="text-gray-600">Phone:</p>
                <p class="font-semibold">{{ Auth::user()->no_hp }}</p>
            </div>
            <div class="flex items-center justify-between border-b border-gray-300 py-2">
                <p class="text-gray-600">Address:</p>
                <p class="font-semibold">{{ Auth::user()->alamat }}</p>
            </div>
            <div class="flex items-center justify-between py-2">
                <p class="text-gray-600">Status:</p>
                <p class="font-semibold">{{ Auth::user()->status_aktif }}</p>
            </div>
            <div class="flex items-center justify-between py-2">
                <p class="text-gray-600">Total Paket Anda:</p>
                <p class="font-semibold">{{ $total_paket_pembayaran }}</p>
            </div>
        </div>
    </div>
</body>
<footer class="bg-gray-800 text-white py-4 text-center">
    <p>&copy; {{ date('Y') }} WiFi-Q. All rights reserved.</p>
</footer>

</html>
