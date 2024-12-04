<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = "guru";
    protected $fillable = ["guru", "mata_pelajaran"];
    protected $primaryKey = 'id_guru';
    
    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class, 'id_guru');
    }
}
