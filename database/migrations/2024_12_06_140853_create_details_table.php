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
        Schema::create('detail', function (Blueprint $table) {
            $table->id('id_detail');
            $table->unsignedBigInteger('id_peminjaman');
            $table->string('nama_peminjam');
            $table->unsignedBigInteger('id_barang');
            $table->integer('jumlah_pinjam');
            $table->string('kelengkapan_pinjam');
            $table->string('kelengkapan_kembali');
            $table->timestamps();

            $table->foreign('id_peminjaman')->references('id_peminjaman')->on('peminjaman')->onDelete('cascade');
            $table->foreign('id_barang')->references('id_barang')->on('barang')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail');
    }
};
