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
        <button type="submit">Simpan Perubahan</button>
    </form>
</body>
</html>
