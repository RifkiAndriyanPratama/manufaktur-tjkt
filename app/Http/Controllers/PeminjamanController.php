<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Peminjaman;
use Illuminate\Http\Request;


class PeminjamanController extends Controller
{
    public function index(){
        $peminjaman = Peminjaman::all();
        return view("home",compact("peminjaman"));
    }
    public function create()
    {
        $kelas = Kelas::all(); 

        return view('peminjaman.create', compact('kelas'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'id_kelas' => 'required',
            'guru_pembimbing' => 'required|string',
            'materi_praktik' => 'required|string',
            'jam_mulai' => 'required|date_format:H:i',
            'jam_selesai' => 'required|date_format:H:i|after:jam_mulai',
        ]);

        // Simpan data peminjaman
        Peminjaman::create($request->all());

        return redirect('/')->with('success', 'Data Peminjaman Berhasil Ditambahkan!');
    }
}

