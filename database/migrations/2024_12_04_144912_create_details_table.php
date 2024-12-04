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
        class CreateDetailPeminjamanTable extends Migration
{
    public function up()
    {
        Schema::create('detail', function (Blueprint $table) {
            $table->id('id_detail');
            $table->foreignId('id_peminjaman')->constrained('peminjaman')->cascadeOnDelete();
            $table->foreignId('id_barang')->constrained('barang')->cascadeOnDelete();
            $table->integer('jumlah_pinjam');
            $table->string('kelengkapan_pinjam')->nullable();
            $table->string('kelengkapan_kembali')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detail');
    }
}

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details');
    }
};
