<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah peminjaman</title>
</head>
<body>
    <h1>Tambah peminjaman Baru</h1>
    <form action="{{ route('peminjaman.store') }}" method="POST">
        @csrf
        <label for="kelas">Kelas</label>
        <select name="id_kelas" id="kelas" required>
            <option value="" disabled selected>Pilih Kelas</option>
            @foreach ($kelas as $k)
                <option value="{{ $k->id_kelas }}">{{ $k->nama_kelas }}</option>
            @endforeach
        </select><br>
        <label for="guru_pembimbing">Guru Pembimbing</label>
        <input type="text" name="guru_pembimbing" id="guru_pembimbing" required><br>
        <label for="materi_praktik">Materi Praktik</label>
        <input type="text" name="materi_praktik" id="materi_praktik" required><br>
        <label for="jam_mulai">Jam Mulai</label>
        <input type="time" name="jam_mulai" id="jam_mulai" required><br>
        <label for="jam_selesai">Jam Selesai</label>
        <input type="time" name="jam_selesai" id="jam_selesai" required><br>
        <button type="submit">Simpan peminjaman</button>
    </form>
</body>
</html>
