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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->string('kode_transaksi', 6)->unique()->primary();
            $table->date('tgl_transaksi');
            $table->string('kode_kasir', 6);
            $table->string('kode_barang', 6);
            $table->string('kode_pelanggan', 6)->nullable();
            $table->string('kode_voucher')->nullable();
            $table->bigInteger('kode_diskon')->nullable();
            $table->bigInteger('total_belanja');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
