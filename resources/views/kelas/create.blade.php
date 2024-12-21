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
        <button type="submit">Simpan Kelas</button>
    </form>
</body>
</html>
