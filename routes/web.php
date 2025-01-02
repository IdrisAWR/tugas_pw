<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PaketWifiController;
use App\Http\Controllers\PembayaranController;

Route::get('/', function () {
    return view('index.beranda');
})->name('beranda');
Route::get('/paket', function () {
    return view('index.paket');
});
Route::get('/bantuan', function () {
    return view('index.bantuan');
});


// route yang perlu authtentikasi dulu
Route::middleware('auth')->group(function () {
    Route::get('/profile', function () {
        return view('index.profile');
    })->name('profile');
});
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/paket/{id}', [PaketWifiController::class, 'show'])->name('paket.index');

// Route::post('/pembayaran/store', [PembayaranController::class, 'store'])->name('pembayaran.store');

Route::get('/pembayaran', [PembayaranController::class, 'index'])->name('pembayaran.index');
Route::get('/paket/{id}/bayar', [PembayaranController::class, 'showPembayaran'])->name('paket.bayar');
Route::post('/pembayaran', [PembayaranController::class, 'prosesPembayaran'])->name('pembayaran.proses');