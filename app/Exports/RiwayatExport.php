<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\DetailPeminjaman;
class RiwayatExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DetailPeminjaman::with(['kategori', 'barang', 'peminjaman'])
            ->get()
            ->map(function ($detail) {
                return [
                    'Nama Peminjam' => $detail->nama_peminjam,
                    'Kategori' => $detail->kategori->nama_kategori ?? 'Tidak Ada',
                    'Barang' => $detail->barang->nama_barang ?? 'Tidak Ada',
                    'Jumlah Pinjam' => $detail->jumlah_pinjam,
                    'Kelengkapan Pinjam' => $detail->kelengkapan_pinjam,
                    'Kelengkapan Kembali' => $detail->kelengkapan_kembali,
                    'Waktu Peminjaman' => $detail->created_at,
                    'Waktu Pengembalian' => $detail->updated_at,
                ];
            });
    }
 }

