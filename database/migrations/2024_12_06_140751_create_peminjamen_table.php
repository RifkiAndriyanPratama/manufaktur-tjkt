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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id('id_peminjaman'); 
            $table->unsignedBigInteger('id_siswa'); 
            $table->unsignedBigInteger('id_barang'); 
            $table->unsignedBigInteger('id_peminjam'); 
            $table->unsignedBigInteger('id_guru'); 
            $table->date('tanggal_peminjaman');
            $table->date('tanggal_pengembalian');
            $table->string('status');
            $table->timestamps();
        
            
            $table->foreign('id_siswa')->references('id_siswa')->on('siswa')->onDelete('cascade');
            $table->foreign('id_barang')->references('id_barang')->on('barang')->onDelete('cascade');
            $table->foreign('id_peminjam')->references('id_peminjam')->on('peminjam')->onDelete('cascade');
            $table->foreign('id_guru')->references('id_guru')->on('guru')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
