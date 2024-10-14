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
        Schema::create('barangs', function (Blueprint $table) {
            $table->integer('barang_id')->primary();
            $table->integer('kategori_id');
            $table->char('nama_barang',length:50);
            $table->integer('daftar_akun');
            $table->double('harga_beli');
            $table->double('pajak_beli');
            $table->double('harga_jual');
            $table->double('pajak_jual');
            $table->integer('stok');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
