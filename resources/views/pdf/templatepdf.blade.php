@vite(['resources/css/app.css','resources/js/app.js'])
<div class="overflow-x-auto w-[794px] h-[1123px] p-14 border">
<div class="text-center text-xl font-mono">
    <h1>Rekap Peminjaman Pada Barang ((bulan))</h1>
</div>
<div class="rounded-xl">
    <table class="bg-white rounded-xl">
        <thead class="bg-gray-300 text-white border rounded-xl">
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
</div>