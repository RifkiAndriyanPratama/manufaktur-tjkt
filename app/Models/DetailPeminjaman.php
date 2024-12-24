<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailPeminjaman extends Model
{
    protected $table = 'detail';
    protected $primaryKey = 'id_detail';

    protected $fillable = [
        'id_peminjaman',
        'nama_peminjam',
        'id_barang',
        'jumlah_pinjam',
        'kelengkapan_pinjam',
        'kelengkapan_kembali',
    ];

    public function peminjaman()
    {
        return $this->belongsTo(Peminjaman::class, 'id_peminjaman');
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang');
    }
}

