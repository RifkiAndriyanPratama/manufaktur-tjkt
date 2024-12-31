<?php

namespace App\Http\Controllers;

use App\Models\DetailPeminjaman;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Peminjaman;
use App\Models\Kelas;

class DetailController extends Controller
{
    public function riwayat()
{
    $detail = DetailPeminjaman::with(['peminjaman.kelas'])->get();

    return view('admin.riwayat', compact('detail'));
}


    public function create($id_peminjaman){
        $barang = Barang::all();
        return view("detail.create",compact("id_peminjaman", "barang"));
    }
    public function store(Request $request)
{
    // dd($request->all());
    $validated = $request->validate([
        'id_peminjaman' => 'required|exists:peminjaman,id_peminjaman',
        'nama_peminjam' => 'required|string|max:255',
        'id_barang' => 'required|exists:barang,id_barang',
        'jumlah_pinjam' => 'required|integer|min:1',
        'kelengkapan_pinjam' => 'nullable|string|max:255',
        'kelengkapan_kembali' => 'nullable|string|max:255',
    ]);

    DetailPeminjaman::create($validated);

    return redirect()->route('peminjaman.show', $validated['id_peminjaman'])->with('success', 'Data Peminjaman Berhasil Ditambahkan!');
}



}
