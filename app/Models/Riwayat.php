<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    protected $table = 'riwayat_peminjaman';
    protected $primaryKey = 'id_riwayat';

    protected $fillable = [
        'id_peminjaman',
        'id_detail',
        'tanggal_peminjaman',
        'tanggal_pengembalian',
        'status',
        'keterangan',
    ];

    public function peminjaman()
    {
        return $this->belongsTo(Peminjaman::class, 'id_peminjaman');
    }

    public function detailPeminjaman()
    {
        return $this->belongsTo(Detail::class, 'id_detail');
    }
}
