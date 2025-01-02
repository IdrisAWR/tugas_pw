<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $total_paket_pembayaran = Pembayaran::where('user_id', Auth::id())->count();
        return view('index.profile', compact('total_paket_pembayaran'));
    }
}
