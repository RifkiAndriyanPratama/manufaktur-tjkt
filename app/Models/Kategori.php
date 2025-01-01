<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'id_kategori';

    protected $fillable = ['nama_kategori'];

    public function barang()
    {
        return $this->hasMany(Barang::class, 'id_kategori');
    }

    public function peminjaman()
    {
        return $this->hasMany(DetailPeminjaman::class, 'id_kategori');
    }
}
