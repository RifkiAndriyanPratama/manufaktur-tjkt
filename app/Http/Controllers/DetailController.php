<?php

namespace App\Http\Controllers;

use App\Models\DetailPeminjaman;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Peminjaman;
use App\Models\Kategori; // Import the Kategori model

class DetailController extends Controller
{
    public function riwayat()
    {
        $detail = DetailPeminjaman::with(['peminjaman.kelas'])->get();

        return view('admin.riwayat', compact('detail'));
    }

    public function create($id_peminjaman)
    {
        $barang = Barang::all(); // Data barang
        $kategori = Kategori::all(); // Data kategori
        return view("detail.create", compact("id_peminjaman", "barang", "kategori"));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_peminjaman' => 'required|exists:peminjaman,id_peminjaman',
            'nama_peminjam' => 'required|string|max:255',
            'id_kategori' => 'required|exists:kategori,id_kategori',
            'id_barang' => 'required|exists:barang,id_barang',
            'jumlah_pinjam' => 'required|integer|min:1',
            'kelengkapan_pinjam' => 'nullable|string|max:255',
        ]);

        DetailPeminjaman::create($validated);

        return redirect()->route('peminjaman.show', $validated['id_peminjaman'])->with('success', 'Data Peminjaman Berhasil Ditambahkan!');
    }
    public function pdf(){
        $detail = DetailPeminjaman::with(['peminjaman.kelas'])->get();

        return view('pdf.templatepdf', compact('detail'));
    }
}
