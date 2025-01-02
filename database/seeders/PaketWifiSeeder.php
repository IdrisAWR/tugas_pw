<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaketWifiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('paket_wifis')->insert([
        [
            'paket_id' => 1,
            'nama_paket' => 'Paket Basic',
            'kecepatan' => '10 Mbps',
            'harga_bulanan' => 150000,
            'deskripsi' => 'Unlimited kuota dan layanan pelanggan 24/7.'
        ],
        [
            'paket_id' => 2,
            'nama_paket' => 'Paket Standard',
            'kecepatan' => '20 Mbps',
            'harga_bulanan' => 250000,
            'deskripsi' => 'Unlimited kuota, layanan pelanggan 24/7, dan gratis pemasangan.'
        ],
        [
            'paket_id' => 3,
            'nama_paket' => 'Paket Premium',
            'kecepatan' => '50 Mbps',
            'harga_bulanan' => 400000,
            'deskripsi' => 'Unlimited kuota, layanan pelanggan prioritas, dan bonus router dual-band.'
        ],
        [
            'paket_id' => 4,
            'nama_paket' => 'Paket Ultra',
            'kecepatan' => '100 Mbps',
            'harga_bulanan' => 700000,
            'deskripsi' => 'Unlimited kuota, Gratis layanan TV kabel, Teknisi on-demand, dan Cashback 10% untuk pembayaran tahunan.'
        ],
        [
            'paket_id' => 5,
            'nama_paket' => 'Paket Bisnis',
            'kecepatan' => '200 Mbps',
            'harga_bulanan' => 1200000,
            'deskripsi' => 'Unlimited kuota, Akses VPN gratis, Layanan prioritas khusus, dan Uptime 99% SLA.',
        ],
    ]);
}
}
