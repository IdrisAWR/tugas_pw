<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\DB;

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
    $pembayarans = Pembayaran::with(['user_id', 'paket_id'])->get();
    return view('index.pembayaran', compact('pembayarans'));
    }
    public function store(Request $request)
    {
        DB::transaction(function () use ($request) {
            foreach ($request->input('pembayarans', []) as $pembayaranData) {
                Pembayaran::create([
                    'tgl_pembayaran' => $pembayaranData['tgl_pembayaran'],
                    'periode_pembayaran' => $pembayaranData['periode_pembayaran'],
                    'jumlah' => $pembayaranData['jumlah'],
                    'status' => $pembayaranData['status'],
                    'user_id' => $pembayaranData['user_id'],
                    'paket_id' => $pembayaranData['paket_id'],
                ]);
            }
        });

        return redirect()->back()->with('success', 'Data pembayaran berhasil disimpan!');
    }
}


