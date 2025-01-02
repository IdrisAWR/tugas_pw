<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>WiFi-Q : Menjalin Koneksi</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" type="image/png" href="{{ asset('img/logo_web.png') }}" />
</head>

<body>
    @extends('layouts.navbar')

    <section class="relative bg-cover bg-center h-screen"
        style="background-image: url('{{ asset('img/bg beranda.jpg') }}')">
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white">
            <h1 class="text-4xl font-bold mb-4">Atur Koneksi Sesukamu</h1>
            <p class="text-lg mb-8">Rasakan jaringan koneksi senyaman mungkin</p>
            <div class="flex items-center bg-white rounded-full shadow-md overflow-hidden w-3/4 md:w-1/2 lg:w-1/3">
                <input type="text" placeholder="Cari nomor Handphone/id WiFi disini"
                    class="flex-grow px-4 py-2 text-gray-800 focus:outline-none">
                <button class="bg-blue-500 text-white px-6 py-2 rounded-r-full hover:bg-blue-600">Search</button>
            </div>
        </div>
    </section>

    <section class="py-16 bg-white text-center">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold mb-4">Apa Keunggulan WiFi-Q ?</h2>
            <p class="text-gray-600 mb-8">Menyediakan koneksi hingga pelosok bumi.<br> Dapat ditemui di seluruh
                Nusantara.</p>
            <h2 class="text-3xl font-bold mb-4">Daftar, Segera!</h2>
            <p class="text-gray-600 mb-8">Create a free account to get started</p>
            <button onclick="openModal()" class="bg-blue-500 text-white px-6 py-2 rounded-full hover:bg-blue-600">Sign
                Up</button>
        </div>
    </section>
    <footer class="bg-gray-800 text-white py-4 text-center">
        <p>&copy; {{ date('Y') }} WiFi-Q. All rights reserved.</p>
    </footer>
</body>

</html>
