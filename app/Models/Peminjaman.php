<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Detail;

class Peminjaman extends Model
{
    protected $table = "peminjaman";
    protected $fillable = ["tanggal_peminjaman","id_peminjam","id_guru","keterangan"];
    protected $primaryKey = 'id_peminjaman';

    public function peminjam()
    {
        return $this->belongsTo(Peminjam::class, 'id_peminjam');
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'id_guru');
    }

    public function detailPeminjaman()
    {
        return $this->hasMany(Detail::class, 'id_peminjaman');
    }
}
