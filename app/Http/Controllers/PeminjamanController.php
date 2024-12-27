<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Peminjaman;
use App\Models\Barang;
use Illuminate\Http\Request;


class PeminjamanController extends Controller
{
    public function index(Request $request){
        $query = Peminjaman::with('kelas'); 
    
        if ($request->has('search') && !empty($request->search)) {
            $query->whereHas('kelas', function ($q) use ($request) {
                $q->where('nama_kelas', 'ilike', '%' . $request->search . '%');
            });
        }

        $peminjaman = $query->get();

        return view("home",compact("peminjaman"));
    }
    public function create()
    {
        $kelas = Kelas::all(); 

        return view('peminjaman.create', compact('kelas'));
    }

    public function store(Request $request)
    {
        // dd($request);
        // Validasi input
        $request->validate([
            'id_kelas' => 'required',
            'guru_pembimbing' => 'required|string',
            'materi_praktik' => 'required|string',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
        ]);

        // Simpan data peminjaman
        Peminjaman::create($request->all());

        return redirect('/')->with('success', 'Data Peminjaman Berhasil Ditambahkan!');
    }

    public function show($id_peminjaman){
        $barang = Barang::all();
        $peminjaman = Peminjaman::with('details')->findOrFail($id_peminjaman);
        return view('peminjaman.show', compact('peminjaman', 'barang'));
    }

    public function pengembalian(Request $request, $id_peminjaman)
    {
        $peminjaman = Peminjaman::findOrFail($id_peminjaman);
        $peminjaman->update([
            'tanggal_pengembalian' => $request->tanggal_pengembalian,
            'status' => 'dikembalikan',
        ]);
        return redirect('/');
    }

    // public function exportPdf()
    // {
    //     $peminjaman = Peminjaman::with('details')->get();
    //     $pdf = PDF::loadView('peminjaman.pdf', compact('peminjaman'));
    //     return $pdf->download('riwayat_peminjaman.pdf');
    // }
}

