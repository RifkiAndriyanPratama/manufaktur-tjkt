<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Peminjaman</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }
        table {
            width: 90%;
            margin: auto;
            border-collapse: collapse;
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 8px;
            overflow: hidden;
            font-size: 12px;
        }
        th, td {
            padding: 5px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: rgba(85, 145, 235, 0.94);
            color: white;
        }
        td.nama-peminjam {
            word-break: break-word;
            white-space: normal;
        }
        td.tanggal {
        text-align: center;
        vertical-align: top;
        line-height: 1.2;
        }
        .tanggal .tanggal-atas {
            display: block;
        }
        .tanggal .jam-bawah {
            display: block;
        }
        h1 {
            text-align: center;
            color: #b91c1c;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Riwayat Peminjaman Barang</h1>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Peminjam</th>
                <th>Kelas</th>
                <th>Nama Barang</th>
                <th>Jumlah Pinjam</th>
                <th>Kelengkapan Pinjam</th>
                <th>Kelengkapan Kembali</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
            </tr>
        </thead>
        <tbody>
            @foreach($detail as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td class="nama-peminjam">{{ $item->nama_peminjam }}</td>
                    <td>{{ $item->peminjaman->kelas->nama_kelas }}</td>
                    <td>{{ $item->barang->nama_barang }}</td>
                    <td>{{ $item->jumlah_pinjam }}</td>
                    <td>{{ $item->kelengkapan_pinjam }}</td>
                    <td>{{ $item->kelengkapan_kembali }}</td>
                    <td class="tanggal">
                        <span class="tanggal-atas">{{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y') }}</span>
                        <span class="jam-bawah">{{ \Carbon\Carbon::parse($item->created_at)->format('H:i:s') }}</span>
                    </td>
                    <td class="tanggal">
                        <span class="tanggal-atas">{{ \Carbon\Carbon::parse($item->updated_at)->format('d-m-Y') }}</span>
                        <span class="jam-bawah">{{ \Carbon\Carbon::parse($item->updated_at)->format('H:i:s') }}</span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
