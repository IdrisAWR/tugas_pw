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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id('pembayaran_id');
            $table->date('tgl_pembayaran');
            $table->string('periode_pembayaran'); // Format: "Januari 2024"
            $table->decimal('jumlah', 10, 2);
            $table->enum('status', ['lunas', 'belum_lunas']); 
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('paket_id');
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreign('paket_id')->references('paket_id')->on('paket_wifis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
