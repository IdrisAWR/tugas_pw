<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('paket_wifis', function (Blueprint $table) {
            $table->id('paket_id');
            $table->string('nama_paket');
            $table->string('kecepatan'); // Dalam Mbps
            $table->decimal('harga_bulanan', 10, 2);
            $table->text('deskripsi')->nullable();
            $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket_wifis');
    }
};
