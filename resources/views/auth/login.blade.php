<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="logInForm">
                <form action="/login" method="post">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2" for="loginEmail">Email</label>
                        <input class="w-full px-3 py-2 border rounded-lg" type="email" name='email' id="loginEmail" placeholder="Enter your email">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 mb-2" for="loginPassword">Password</label>
                        <input class="w-full px-3 py-2 border rounded-lg" type="password" name='password' id="loginPassword" placeholder="Enter your password">
                    </div>
                    <button class="w-full bg-blue-600 text-white py-2 rounded-lg mb-4" type="submit">Login</button>
                </form>
                <div class="text-center mt-4">
                    <p class="text-gray-600">Don't have an account?</p>
                    <a href="#" class="text-blue-600" onclick="showSignUp()">Sign up</a>
                </div>
            </div>
</body>
</html>