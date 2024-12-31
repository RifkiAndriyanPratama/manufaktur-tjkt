<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Peminjaman;
use App\Models\Barang;
use Illuminate\Http\Request;


class PeminjamanController extends Controller
{
    public function index(Request $request)
    {
        $kelas = Kelas::all();

        $query = Peminjaman::with('kelas');

        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->whereHas('kelas', function ($q) use ($search) {
                    $q->where('nama_kelas', 'ilike', '%' . $search . '%');
                })
                ->orWhere('guru_pembimbing', 'ilike', '%' . $search . '%')
                ->orWhere('materi_praktik', 'ilike', '%' . $search . '%');
            });
        }

        $peminjaman = $query->orderBy('created_at', 'desc')->get();

        return view('home', compact('peminjaman', 'kelas'));
    }   
    
    public function create()
    {
        $kelas = Kelas::all(); 

        return view('peminjaman.create', compact('kelas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_kelas' => 'required',
            'guru_pembimbing' => 'required|string',
            'materi_praktik' => 'required|string',
            'jam_mulai' => 'required|integer|min:1|max:12',
            'jam_selesai' => 'required|integer|min:1|max:12|gte:jam_mulai',
        ]);

        $peminjaman = Peminjaman::create($request->all());

        $peminjaman->load('kelas');

        return response()->json([
            'success' => true,
            'message' => 'Data Peminjaman Berhasil Ditambahkan!',
            'data' => $peminjaman,
        ]);
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
}

