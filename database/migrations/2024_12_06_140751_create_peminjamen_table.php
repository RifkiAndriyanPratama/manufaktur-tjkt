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
            $table->date('tanggal_peminjaman');
            $table->date('tanggal_pengembalian');
            $table->unsignedBigInteger('id_peminjam');
            $table->unsignedBigInteger('id_guru');
            $table->string('status');
            $table->timestamps();

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
