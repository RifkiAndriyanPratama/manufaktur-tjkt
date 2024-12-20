<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kelas</title>
</head>
<body>
    <h1>Edit Kelas</h1>
    <form action="{{ route('kelas.update', $kelas->id_kelas) }}" method="POST">
        @csrf
        @method('PUT') 
        <label for="nama_kelas">Nama kelas</label>
        <input type="text" name="nama_kelas" id="nama_kelas" value="{{ $kelas->nama_kelas }}" required><br>

        <label for="guru_pembimbing">Guru Pemimbing</label>
        <input type="text" name="guru_pembimbing" id="guru_pembimbing" value="{{ $kelas->guru_pembimbing }}" required><br>

        <label for="materi_praktik">Materi Praktik</label>
        <input type="text" name="materi_praktik" id="materi_praktik" value="{{ $kelas->materi_praktik }}" required><br>

        <label for="jam">Jam</label>
        <input type="text" name="jam" id="jam" value="{{ $kelas->jam }}" required><br>

        <button type="submit">Simpan Perubahan</button>
    </form>
</body>
</html>
