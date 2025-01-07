<?php

namespace App\Http\Controllers;

use App\Exports\RiwayatExport;
use App\Models\DetailPeminjaman;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Peminjaman;
use App\Models\Kategori;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;

class DetailController extends Controller
{
    public function pengembalian(Request $request, $id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->tanggal_pengembalian = $request->input('tanggal_pengembalian');
        $peminjaman->status = 'Dikembalikan';
        $peminjaman->save();

        return redirect()->route('peminjaman.show', $id)->with('success', 'Barang berhasil dikembalikan.');
    }

    public function riwayat(Request $request)
    {
        $filterDate = $request->input('filter_date');
        $bulan = null;
        $tahun = null;

        if ($filterDate) {
            $tahun = substr($filterDate, 0, 4);
            $bulan = substr($filterDate, 5, 2);
        }

        $detail = DetailPeminjaman::with(['peminjaman.kelas', 'barang'])
            ->when($bulan, function ($query, $bulan) {
                return $query->whereMonth('created_at', $bulan);
            })
            ->when($tahun, function ($query, $tahun) {
                return $query->whereYear('created_at', $tahun);
            })
            ->get();

        // Jika request menggunakan AJAX, kembalikan data JSON
        if ($request->ajax()) {
            return response()->json(['data' => $detail]);
        }

        // Render halaman awal
        return view('admin.riwayat', compact('detail'));
    }

    public function create($id_peminjaman)
    {
        $barang = Barang::all()->groupBy('id_kategori'); 
        $kategori = Kategori::all();
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

        return redirect()->route('peminjaman.show', $validated['id_peminjaman'])->with('success', 'Barang Berhasil Dipinjam!');
    }

    public function exportPdf(Request $request)
    {
        $bulan = $request->query('bulan');
        $tahun = $request->query('tahun');

        if (!$bulan || !$tahun) {
            return back()->with('error', 'Harap pilih bulan dan tahun terlebih dahulu!');
        }

        $detail = DetailPeminjaman::with(['peminjaman.kelas', 'barang'])
            ->whereMonth('created_at', $bulan)
            ->whereYear('created_at', $tahun)
            ->get();

        if ($detail->isEmpty()) {
            return back()->with('error', 'Data tidak ditemukan untuk bulan dan tahun yang dipilih.');
        }

        $pdf = Pdf::loadView('pdf', compact('detail'));

        return $pdf->download("riwayat_peminjaman_{$bulan}_{$tahun}.pdf")->with('success', 'PDF berhasil diunduh.');
    }

    public function excel(Request $request)
    {
        $bulan = $request->get('bulan');
        $tahun = $request->get('tahun');

        if (!$bulan || !$tahun) {
            return back()->with('error', 'Harap pilih bulan dan tahun terlebih dahulu!');
        }

        $detail = DetailPeminjaman::with(['kategori', 'barang', 'peminjaman'])
            ->whereMonth('created_at', $bulan)
            ->whereYear('created_at', $tahun)
            ->get();

        if ($detail->isEmpty()) {
            return back()->with('error', 'Data tidak ditemukan untuk bulan dan tahun yang dipilih.');
        }

        return Excel::download(new RiwayatExport($bulan, $tahun), "riwayat-peminjaman-barang_{$bulan}_{$tahun}.xlsx")->with('success', 'Excel berhasil diunduh.');
    }
}
