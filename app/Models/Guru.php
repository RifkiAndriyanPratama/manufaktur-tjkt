<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';
    protected $primaryKey = 'id_guru';

    protected $fillable = ['nama', 'mata_pelajaran'];

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class, 'id_guru');
    }
}
