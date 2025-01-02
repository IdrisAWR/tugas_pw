<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\DB;
use App\Models\PaketWifi;

class PembayaranController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index()
    {
        return view('index.pembayaran');
    }

    public function showPembayaran($id)
    {
        // Ambil data paket berdasarkan ID
        $paket = PaketWifi::findOrFail($id);

        // Hitung total pembayaran (contoh: harga bulanan)
        $totalPembayaran = $paket->harga_bulanan;

        // Tampilkan halaman pembayaran
        return view('index.pembayaran', compact('paket', 'totalPembayaran'));
    }

    public function prosesPembayaran(Request $request)
    {
        // Validasi input
        $request->validate([
            'paket_id' => 'required|exists:paket_wifis,paket_id',
            'user_id' => 'required',
            'jumlah' => 'required|numeric',
        ]);
    
        // Simpan data pembayaran ke database
        Pembayaran::create([
            'tgl_pembayaran' => now(),
            'periode_pembayaran' => $request->periode_pembayaran,
            'jumlah' => $request->jumlah,
            'status' => $request->status,
            'user_id' => $request->user_id,
            'paket_id' => $request->paket_id,
        ]);
    
        return redirect('/paket')->with('success', 'Pembayaran berhasil diproses.');
        }
}


