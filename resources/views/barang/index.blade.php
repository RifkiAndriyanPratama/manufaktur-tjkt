<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Barang</title>
</head>
<body>
    <a href="{{ route('barang.create') }}">Tambah Barang</a>

    <form action="{{ route('barang.index') }}" method="GET">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari barang atau kategori">
        <button type="submit">Cari</button>
    </form>
    

    @if($barang->isEmpty())
        <p>Tidak ada barang yang tersedia.</p>
    @else
        <table border="1">
            <thead>
                <tr>
                    <th>Nama Barang</th>
                    <th>Stok</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barang as $b)
                    <tr>
                        <td>{{ $b->nama_barang }}</td>
                        <td>{{ $b->stok }}</td>
                        <td>{{ $b->kategori->nama_kategori }}</td>
                        <td>
                            <!-- Edit Button -->
                            <a href="{{ route('barang.edit', $b->id_barang) }}">Edit</a> |
                            <!-- Delete Button -->
                            <form action="{{ route('barang.destroy', $b->id_barang) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
