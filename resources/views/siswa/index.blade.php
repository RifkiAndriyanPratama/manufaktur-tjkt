<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar siswa</title>
</head>
<body>
    <a href="{{ route('siswa.create') }}">Tambah siswa</a>

    @if($siswa->isEmpty())
        <p>Tidak ada siswa yang tersedia.</p>
    @else
        <table border="1">
            <thead>
                <tr>
                    <th>Nama siswa</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $s)
                    <tr>
                        <td>{{ $s->nama_siswa }}</td>
                        <td>{{ $s->kelas->nama_kelas }}</td>
                        <td>
                            <!-- Edit Button -->
                            <a href="{{ route('siswa.edit', $s->id_siswa) }}">Edit</a>
                            <!-- Delete Button -->
                            <form action="{{ route('siswa.destroy', $s->id_siswa) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus siswa ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
