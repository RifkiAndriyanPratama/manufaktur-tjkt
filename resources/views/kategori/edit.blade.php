<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kategori</title>
</head>
<body>
    <h1>Edit Kategori</h1>
    <form action="{{ route('kategori.update', $kategori->id_kategori) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nama Kategori</label>
        <input type="text" name="nama_kategori" id="name" value="{{ $kategori->nama_kategori }}" required><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
