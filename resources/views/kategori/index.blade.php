<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('kategori.create') }}">Tambah Kategori</a>
    @if($kategori->isEmpty())
        <p>Tidak ada Kategori yang tersedia.</p>
    @else
    <table border="1">
        <thead>
            <tr>
                <th>Nama Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kategori as $k)
                <tr>
                    <td>{{ $k->nama_kategori }}</td>
                    <td>
                        <!-- Edit Button -->
                        <a href="{{ route('kategori.edit', $k->id_kategori) }}">Edit</a> |
                        <!-- Delete Button -->
                        <form action="{{ route('kategori.destroy', $k->id_kategori) }}" method="POST" style="display:inline;">
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