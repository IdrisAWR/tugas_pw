<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pembayaran;

class PaketWifi extends Model
{
    /** @use HasFactory<\Database\Factories\PaketWifiFactory> */
    use HasFactory;

    protected $table = 'paket_wifis';
    protected $primaryKey = 'paket_id';
    public $timestamps = false;

    public function pembayarans()
    {
        return $this->hasMany(Pembayaran::class);
    }

    protected $fillable = [
        'nama_paket',
        'kecepatan',
        'harga_bulanan',
        'deskripsi',
    ];
}
