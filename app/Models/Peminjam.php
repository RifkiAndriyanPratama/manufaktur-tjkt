<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjam extends Model
{
    protected $table = "peminjam";
    protected $fillable = ["nama", "kelas"];
}
