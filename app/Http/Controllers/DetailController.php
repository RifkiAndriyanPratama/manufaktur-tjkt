<?php

namespace App\Http\Controllers;

use App\Models\DetailPeminjaman;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function tambahSiswa(Request $request)
{
    $validated = $request->validate([
        'id_peminjaman' => 'required|exists:peminjaman,id',
        'nama_peminjam' => 'required|string|max:255',
        'id_barang' => 'required|exists:barang,id',
        'jumlah_pinjam' => 'required|integer|min:1',
        'kelengkapan_pinjam' => 'nullable|string|max:255',
    ]);

    DetailPeminjaman::create($validated);

    return redirect()->back()->with('success', 'Data siswa peminjam berhasil ditambahkan.');
}


}
