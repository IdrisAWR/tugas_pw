<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pembayaran extends Model
{
    /** @use HasFactory<\Database\Factories\PembayaranFactory> */
    use HasFactory;

    protected $table = 'pembayarans';
    protected $primaryKey = 'pembayaran_id';
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id'); // 'user_id' di tabel pembayaran dan users
    }

    public function paket()
    {
        return $this->belongsTo(PaketWifi::class, 'paket_id', 'paket_id'); // 'paket_id' di tabel pembayaran dan paket_wifis
    }

    protected $fillable = [
        'tgl_pembayaran',
        'periode_pembayaran',
        'jumlah',
        'status',
        'user_id',
        'paket_id',
    ];
}
