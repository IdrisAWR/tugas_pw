<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PaketWifiController;
use App\Http\Controllers\PembayaranController;

Route::get('/', function () {return view('index.navbar');});
Route::get('/beranda', function () {return view('index.beranda');})->name('beranda');
Route::get('/paket', function () {return view('index.paket');});
Route::get('/bantuan', function () {return view('index.bantuan');});

Route::get('/profile', function () {
    return view('index.profile'); 
})->middleware('auth')->name('profile');

Route::get('/pembayaran', [PembayaranController::class, 'index'])->name('pembayaran.index');

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/register', function () {
    return redirect('/beranda');
})->name('register');

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/login', function () {
    return redirect('/beranda'); // buka openmodal()
})->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/paket/{id}', [PaketWifiController::class, 'show'])->name('paket.index');

Route::post('/pembayaran/store', [PembayaranController::class, 'store'])->name('pembayaran.store');

Route::get('/bantuan/panduan1', function () {
    return view('bantuan.panduan1');
});




