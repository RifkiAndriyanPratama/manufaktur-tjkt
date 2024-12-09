<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjam extends Model
{
    protected $table = 'peminjam';
    protected $primaryKey = 'id_peminjam';

    protected $fillable = ['nama', 'kelas'];

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class, 'id_peminjam');
    }
}
