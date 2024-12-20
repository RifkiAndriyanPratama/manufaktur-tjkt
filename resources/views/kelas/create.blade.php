<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kelas</title>
</head>
<body>
    <h1>Tambah Kelas Baru</h1>
    <form action="{{ route('kelas.store') }}" method="POST">
        @csrf
        <label for="nama_kelas">Nama Kelas</label>
        <input type="text" name="nama_kelas" id="nama_kelas" required><br>
        <label for="guru_pembimbing">Guru Pembimbing</label>
        <input type="text" name="guru_pembimbing" id="guru_pembimbing" required><br>
        <label for="materi_praktik">Materi Praktik</label>
        <input type="text" name="materi_praktik" id="materi_praktik" required><br>
        <label for="jam">Jam</label>
        <input type="text" name="jam" id="jam" required><br>
        <button type="submit">Simpan Kelas</button>
    </form>
</body>
</html>
