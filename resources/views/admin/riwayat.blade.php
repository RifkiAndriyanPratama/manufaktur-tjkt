<x-layout-admin>
    <div class="container mx-auto py-0">
    <h1 class="text-2xl font-bold mb-4">Riwayat Peminjaman</h1>
    <div class="py-4">
        <a href="{{ route("exportPdf") }}" class="p-2 bg-red-600 rounded-lg text-white">Download PDF</a>
    </div>
    <div class="py-4">
        <a href="{{ route("excel") }}" class="p-2 bg-green-600 rounded-lg text-white">Download Excel</a>
    </div>
    <!-- Tabel Riwayat -->
    @if($detail->isEmpty())
        <p class="text-center">Tidak ada peminjaman.</p>
    @else
        <div class="overflow-x-auto rounded-xl">
            <table class="min-w-full bg-white rounded-xl">
                <thead class="bg-blue-800 text-white border rounded-xl">
                    <tr>
                        <th class="px-4 py-2 text-left">No</th>
                        <th class="px-4 py-2 text-left">Nama Peminjam</th>
                        <th class="px-4 py-2 text-left">Kelas</th>
                        <th class="px-4 py-2 text-left">Nama Barang</th>
                        <th class="px-4 py-2 text-left">Jumlah</th>
                        <th class="px-4 py-2 text-left">Kelengkapan Pinjam</th>
                        <th class="px-4 py-2 text-left">Kelengkapan Kembali</th>
                    </tr>
                </thead>
                <tbody id="barangTable">
                    @foreach($detail as $index => $item)
                    <tr class="{{ $loop->odd ? 'bg-gray-200' : 'bg-gray-100' }} hover:bg-blue-200">
                        <td class="px-4 py-2">{{ $index + 1 }}</td>
                        <td class="px-4 py-2">{{ $item->nama_peminjam }}</td>
                        <td class="px-4 py-2">{{ $item->peminjaman->kelas->nama_kelas }}</td>
                        <td class="px-4 py-2">{{ $item->barang->nama_barang }}</td>
                        <td class="px-4 py-2">{{ $item->jumlah_pinjam }}</td>
                        <td class="px-4 py-2">{{ $item->kelengkapan_pinjam }}</td>
                        <td class="px-4 py-2">{{ $item->kelengkapan_kembali }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
</x-layout-admin>