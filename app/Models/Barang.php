<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;
use App\Models\Detail;

class Barang extends Model
{
    protected $table = "barang";
    protected $primaryKey = "id_barang";
    protected $fillable = ["nama_barang", "merk", "stok", "id_kategori"];

    public function kategori() {
        return $this->belongsTo(Kategori::class);
    }
    public function detailPeminjaman(){
        return $this->hasMany(Detail::class, 'id_barang');
    }
}
