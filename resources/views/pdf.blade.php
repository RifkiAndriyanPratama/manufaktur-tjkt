<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Peminjaman</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <h1 class="text-red-700">Riwayat Peminjaman Barang</h1>
    <table border="1" cellpadding="10" cellspacing="0" class="bg-white rounded-xl">
        <thead class="bg-gray-300 text-white border rounded-xl">
            <tr>
                <th>No.</th>
                <th>Nama Peminjam</th>
                <th>Kelas</th>
                <th>Nama Barang</th>
                <th>Jumlah Pinjam</th>
                <th>Kelengkapan Pinjam</th>
                <th>Kelengkapan Kembali</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali </th>
            </tr>
        </thead>
        <tbody>
            @foreach($detail as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->nama_peminjam }}</td>
                    <td>{{ $item->peminjaman->kelas->nama_kelas }}</td>
                    <td>{{ $item->barang->nama_barang }}</td>
                    <td>{{ $item->jumlah_pinjam }}</td>
                    <td>{{ $item->kelengkapan_pinjam }}</td>
                    <td>{{ $item->kelengkapan_kembali }}</td>
                    <th>{{ $item->created_at }}</th>
                    <th>{{ $item->updated_at }}</th>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
