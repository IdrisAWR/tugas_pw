<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaketWifi;

class PaketWifiController extends Controller
{
    public function show($id)
    {
        $paket = PaketWifi::findOrFail($id); // Ambil data berdasarkan id
        return view('paket.index', compact('paket')); // Kirim data ke view
    }

    public function bayar($id)
    {
        $paket = PaketWifi::findOrFail($id); // Ambil data berdasarkan id
        return view('index.pembayaran', compact('paket')); // Kirim data ke view
    }
}
