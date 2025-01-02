<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @include('layouts.navbar')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Profile</h1>
        <div class="bg-white p-4 rounded-lg shadow-md">
            <p>Welcome, {{ Auth::user()->name }}!</p>
            <div class="flex items-center justify-between">
                <p class="text-gray-600">Email:</p>
                <p class="font-semibold">{{ Auth::user()->email }}</p>
            </div>
            <div class="flex items-center justify-between">
                <p class="text-gray-600">Phone:</p>
                <p class="font-semibold">{{ Auth::user()->phone }}</p>
            </div>
            <div class="flex items-center justify-between">
                <p class="text-gray-600">Address:</p>
                <p class="font-semibold">{{ Auth::user()->address }}</p>
            </div>
        </div>
    </div>
</body>
<footer class="bg-gray-800 text-white py-4 text-center">
    <p>&copy; {{ date('Y') }} WiFi-Q. All rights reserved.</p>
</footer>

</html>
