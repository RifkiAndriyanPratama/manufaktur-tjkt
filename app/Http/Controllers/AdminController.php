<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\DetailPeminjaman;
use App\Models\Kategori;
use App\Models\Kelas;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $jumlahDetail = DetailPeminjaman::count();
        $jumlahBarang = Barang::count();
        $jumlahKategori = Kategori::count();
        $jumlahKelas = Kelas::count();

        return view('admin.statistik', compact('jumlahDetail', 'jumlahBarang', 'jumlahKategori', 'jumlahKelas'));
    }
}

