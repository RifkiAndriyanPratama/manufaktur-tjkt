<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Kelas</title>
</head>
<body>
    <a href="{{ route('kelas.create') }}">Tambah Kelas</a>

    @if($kelas->isEmpty())
        <p>Tidak ada kelas yang tersedia.</p>
    @else
        <table border="1">
            <thead>
                <tr>
                    <th>Nama Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kelas as $k)
                    <tr>
                        <td>{{ $k->nama_kelas }}</td>
                        <td>
                            <!-- Edit Button -->
                            <a href="{{ route('kelas.edit', $k->id_kelas) }}">Edit</a>
                            <!-- Delete Button -->
                            <form action="{{ route('kelas.destroy', $k->id_kelas) }}" method="POST" style="display:inline;">
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
