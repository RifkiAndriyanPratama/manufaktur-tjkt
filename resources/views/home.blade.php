<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('login') }}">Login</a>
    <a href="{{ route('register') }}">Register</a>
    <br>
    <br>
    <a href="{{ route('peminjaman.create') }}">+</a>
    @if($peminjaman->isEmpty())
        <p>Tidak ada peminjaman</p>
        @else
        <table border="1">
            <thead>
                <tr>
                    <th>Kelas</th>
                    <th>Guru Pembimbing</th>
                    <th>Materi Praktik</th>
                    <th>Jam Mulai</th>
                    <th>Jam Selesai</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($peminjaman as $p)
                    <tr>
                        <td>{{ $p->kelas->nama_kelas }}</td>
                        <td>{{ $p->guru_pembimbing }}</td>
                        <td>{{ $p->materi_praktik }}</td>
                        <td>{{ $p->jam_mulai }}</td>
                        <td>{{ $p->jam_selesai }}</td>
                        <td>
                            <a href="{{ route('peminjaman.show', $p->id_peminjaman) }}">Detail</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>