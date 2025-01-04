<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use App\Models\DetailPeminjaman;

class RiwayatExport implements FromCollection, WithHeadings, ShouldAutoSize, WithStyles
{
    protected $bulan;
    protected $tahun;

    /**
     * RiwayatExport constructor.
     * 
     * @param int $bulan
     * @param int $tahun
     */
    public function __construct($bulan, $tahun)
    {
        $this->bulan = $bulan;
        $this->tahun = $tahun;
    }

    /**
     * Mengambil Data
     *
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return DetailPeminjaman::with(['kategori', 'barang', 'peminjaman'])
            ->whereMonth('created_at', $this->bulan)  // Filter berdasarkan bulan
            ->whereYear('created_at', $this->tahun)   // Filter berdasarkan tahun
            ->get()
            ->map(function ($detail, $index) {
                return [
                    $index + 1,
                    $detail->nama_peminjam,
                    $detail->barang->nama_barang ?? 'Tidak Ada',
                    $detail->kategori->nama_kategori ?? 'Tidak Ada',
                    $detail->jumlah_pinjam,
                    $detail->kelengkapan_pinjam,
                    $detail->created_at,
                    $detail->updated_at,
                ];
            });
    }

    /**
     * Header.
     *
     * @return array
     */
    public function headings(): array
    {
        return [
            'No',
            'Nama Peminjam',
            'Barang',
            'Kategori',
            'Jumlah Pinjam',
            'Kelengkapan Pinjam',
            'Tanggal Peminjaman',
            'Tanggal Pengembalian',
        ];
    }

    /**
     * Styling untuk sheet
     *
     * @param Worksheet $sheet
     * @return array
     */
    public function styles(Worksheet $sheet)
    {
        // Styling untuk header
        $sheet->getStyle('A1:H1')->applyFromArray([
            'font' => ['bold' => true],
            'alignment' => ['horizontal' => 'center', 'vertical' => 'center'],
            'fill' => [
                'fillType' => 'solid',
                'color' => ['rgb' => 'D3D3D3'],
            ],
        ]);

        $sheet->getStyle('A:H')->getAlignment()->setHorizontal('center');
        
        return [];
    }
}
