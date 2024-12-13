<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'id_siswa';

    protected $fillable = [
        'nama_siswa',
        'id_kelas',
    ];

    // Relasi dengan Kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    // Relasi dengan Peminjaman
    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }
}
