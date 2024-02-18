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
        Schema::create('klien', function (Blueprint $table) {
            $table->integer('id');
            $table->unique('id');
            $table->string('user');
            $table->string('klien');
            $table->string('tipe_pekerjaan');
            $table->string('pekerjaan');
            $table->string('proyek');
            $table->string('penawaran_jasa');
            $table->string('permintaan_jasa');
            $table->string('tagihan');
            $table->string('pembayaran_pembelian');
            $table->string('pesanan_pembelian');
            $table->string('refrensi_perusahaan');
            $table->string('refrensi_bahasa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('klien');
    }
};
