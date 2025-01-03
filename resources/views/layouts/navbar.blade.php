<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>WiFi-Q</title>
    <link rel="icon" type="image/png" href="{{ asset('img/logo_web.png') }}" />
    @vite('resources/css/app.css')
    <style>
        ::-webkit-scrollbar {
            width: 5px;
            height: 5px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        .fixed {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 100;
        }

        .hidden {
            display: none;
        }

        input#menu-toggle:checked~nav#menu {
            display: flex;
        }

        @media (min-width: 768px) {
            nav#menu {
                display: flex !important;
            }
        }
    </style>
</head>
<header class="bg-gray-400 shadow fixed w-full z-10">
    <div class="container mx-auto px-4 flex flex-wrap items-center justify-between py-4">
        <!-- Logo -->
        <a href="/beranda" class="hover:text-blue-700">
            <img src="{{ asset('img/logo_navbar.png') }}" alt="logo" class="h-10 md:h-12">
        </a>

        <!-- Hamburger Menu -->
        <div class="md:hidden">
            <input type="checkbox" id="menu-toggle" class="hidden peer">
            <label for="menu-toggle" class="cursor-pointer text-gray-700 focus:outline-none " onclick="toggleMenu()">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </label>
        </div>

        <!-- Navigation Links -->
        <nav id="menu"
            class="hidden md:flex md:flex-col md:space-y-4 lg:space-y-8 items-center font-semibold text-gray-700">
            <ul class="list-none flex md:space-x-4">
                <li><a href="/" class="block text-black-800 hover:text-blue-700 py-2 px-4 md:py-0">Beranda</a>
                </li>
                <li><a href="/paket" class="block text-black-800 hover:text-blue-700 py-2 px-4 md:py-0">Paket</a></li>
                <li><a href="/pembayaran"
                        class="block text-black-800 hover:text-blue-700 py-2 px-4 md:py-0">Pembayaran</a></li>
                <li><a href="/bantuan" class="block text-black-800 hover:text-blue-700 py-2 px-4 md:py-0">Bantuan</a>
                </li>
            </ul>
        </nav>

        <!-- Authentication Section -->
        @if (Auth::check())
            <div class="relative group">
                <div class="flex items-center cursor-pointer gap-2">
                    <svg class="fill-current h-4 w-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.064 5.859A1.993 1.993 0 004 3H2v10h2V3z" />
                    </svg>
                    <span>{{ Auth::user()->name }}</span>
                </div>
                <ul class="absolute hidden group-hover:block bg-white text-gray-700 pt-1 right-0 shadow-md">
                    <li class="mb-2">
                        <a href="/profile" class="block bg-gray-200 hover:bg-gray-400 py-2 px-4">Profile</a>
                    </li>
                    <li class="my-2">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="block bg-gray-200 hover:bg-gray-400 py-2 px-4" type="submit">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        @else
            <a href="#" onclick="openModal()"
                class="px-4 py-2 rounded-md border border-gray-300 text-gray-700 hover:text-white hover:bg-blue-700 hover:border-blue-700 focus:outline-none">Log
                In</a>
        @endif


    </div>
</header>
@if (session('success'))
    <div class="fixed top-1/2 right-1/2 transform translate-x-1/2 translate-y-1/2 bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded shadow-lg z-50"
        role="alert">
        <strong class="font-bold">Berhasil!</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
        <button class="absolute top-0 bottom-0 right-0 px-2 py-1" onclick="this.parentElement.style.display='none';">
            <svg class="fill-current h-4 w-4 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20">
                <title>Close</title>
                <path
                    d="M14.348 14.849a1 1 0 01-1.414 0L10 11.914l-2.935 2.935a1 1 0 01-1.414-1.414L8.086 10.5 5.151 7.564a1 1 0 111.414-1.414L10 8.586l2.935-2.935a1 1 0 111.414 1.414L11.914 10.5l2.935 2.935a1 1 0 010 1.414z" />
            </svg>
        </button>
    </div>
@endif

@if (session('error'))
    <div class="fixed top-1/2 right-1/2 transform translate-x-1/2 translate-y-1/2 bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded shadow-lg z-50"
        role="alert">
        <strong class="font-bold">Gagal!</strong>
        <span class="block sm:inline">{{ session('error') }}</span>
        <button class="absolute top-0 bottom-0 right-0 px-2 py-1" onclick="this.parentElement.style.display='none';">
            <svg class="fill-current h-4 w-4 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20">
                <title>Close</title>
                <path
                    d="M14.348 14.849a1 1 0 01-1.414 0L10 11.914l-2.935 2.935a1 1 0 01-1.414-1.414L8.086 10.5 5.151 7.564a1 1 0 111.414-1.414L10 8.586l2.935-2.935a1 1 0 111.414 1.414L11.914 10.5l2.935 2.935a1 1 0 010 1.414z" />
            </svg>
        </button>
    </div>
@endif
<div id="modal" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center hidden">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-3xl relative">
        <button onclick="closeModal()" class="absolute top-2 right-2 text-gray-600">
            <i class="fas fa-times"></i>
        </button>
        <h1 class="text-2xl font-bold mb-2 text-blue-900">Welcome to WiFi-Q</h1>
        <p class="text-gray-600 mb-6">Create a free account to get started</p>
        <div class="flex border-b mb-6">
            <button id="logInTab" class="py-2 px-4 text-gray-600 border-b-2 border-blue-600"
                onclick="showLogIn()">Login</button>
            <button id="signUpTab" class="py-2 px-4 text-gray-600 border-b-2 hover:border-blue-600"
                onclick="showSignUp()">Sign Up</button>
        </div>
        <div id="logInForm">
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="loginEmail">Email</label>
                    <input class="w-full px-3 py-2 border rounded-lg" type="email" name="email" id="loginEmail"
                        required>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 mb-2" for="loginPassword">Password</label>
                    <input class="w-full px-3 py-2 border rounded-lg" type="password" name="password"
                        id="loginPassword" required>
                </div>
                <button class="w-full bg-blue-600 text-white py-2 rounded-lg mb-4" type="submit">Login</button>
            </form>
            <div class="text-center mt-4">
                <p class="text-gray-600">Don't have an account?</p>
                <a href="#" class="text-blue-600" onclick="showSignUp()">Sign up</a>
            </div>
        </div>
        <div id="signUpForm" class="hidden">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="grid grid-cols-2 gap-2">
                    <div class="mb-2">
                        <label class="block text-gray-700 mb-2" for="name">Nama</label>
                        <input class="w-full px-3 py-2 border rounded-lg" type="text" name='name'
                            id="name" placeholder="Enter your name">
                    </div>
                    <div class="mb-2">
                        <label class="block text-gray-700 mb-2" for="email">Email</label>
                        <input class="w-full px-3 py-2 border rounded-lg" type="email" name='email'
                            id="email" placeholder="Enter your email">
                    </div>
                    <div class="mb-2">
                        <label class="block text-gray-700 mb-2" for="password">Password</label>
                        <input class="w-full px-3 py-2 border rounded-lg" type="password" name='password'
                            id="password" placeholder="Enter your password">
                    </div>
                    <div class="mb-2">
                        <label class="block text-gray-700 mb-2" for="password_confirmation">Konfirmasi
                            Password</label>
                        <input class="w-full px-3 py-2 border rounded-lg" type="password"
                            name='password_confirmation' id="password_confirmation"
                            placeholder="Enter your password again">
                        <p class="text-red-600 text-xs" id="password_error"></p>
                    </div>
                    <div class="mb-2">
                        <label class="block text-gray-700 mb-2" for="address">Alamat</label>
                        <input class="w-full px-3 py-2 border rounded-lg" type="text" name='alamat'
                            id="alamat" placeholder="Enter your address">
                    </div>
                    <div class="mb-2">
                        <label class="block text-gray-700 mb-2" for="phone">Nomer HP</label>
                        <input class="w-full px-3 py-2 border rounded-lg" type="text" name='no_hp'
                            id="no_hp" placeholder="Enter your phone number">
                    </div>
                    <div class="mb-4 col-span-2">
                        <label class="block text-gray-700 mb-2" for="status">Status</label>
                        <select class="w-full px-3 py-2 border rounded-lg" name='status_aktif' id="status_aktif">
                            <option value="aktif">Aktif</option>
                            <option value="tidak_aktif">Tidak Aktif</option>
                        </select>
                    </div>
                </div>
                <button class="w-full bg-blue-600 text-white py-2 rounded-lg mb-4" type="submit">Sign Up</button>
            </form>
            <div class="text-center mt-4">
                <p class="text-gray-600">Already have an account?</p>
                <a href="#" class="text-blue-600" onclick="showLogIn()">Login</a>
            </div>
        </div>
    </div>
</div>
</body>
<script>
    const password = document.getElementById('password');
    const password_confirmation = document.getElementById('password_confirmation');
    const password_error = document.getElementById('password_error');

    password_confirmation.addEventListener('input', () => {
        if (password.value !== password_confirmation.value) {
            password_error.textContent = 'Password tidak sama';
        } else {
            password_error.textContent = '';
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
        const currentPath = window.location.pathname;
        if (currentPath === '/login') {
            openModal();
        }
    });

    function openModal() {
        document.getElementById('modal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('modal').classList.add('hidden');
    }

    function showLogIn() {
        document.getElementById('logInForm').classList.remove('hidden');
        document.getElementById('signUpForm').classList.add('hidden');
        document.getElementById('logInTab').classList.add('text-blue-600', 'border-blue-600');
        document.getElementById('logInTab').classList.remove('text-gray-600');
        document.getElementById('signUpTab').classList.add('text-gray-600');
        document.getElementById('signUpTab').classList.remove('text-blue-600', 'border-blue-600');
    }

    function showSignUp() {
        document.getElementById('logInForm').classList.add('hidden');
        document.getElementById('signUpForm').classList.remove('hidden');
        document.getElementById('signUpTab').classList.add('text-blue-600', 'border-blue-600');
        document.getElementById('signUpTab').classList.remove('text-gray-600');
        document.getElementById('logInTab').classList.add('text-gray-600');
        document.getElementById('logInTab').classList.remove('text-blue-600', 'border-blue-600');
    }

    function toggleMenu() {
        let menu = document.getElementById('menu');
        menu.classList.toggle('hidden');
    }
</script>
<div style="height: 5rem;"></div>

</html>
