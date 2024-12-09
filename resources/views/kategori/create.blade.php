<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kategori</title>
</head>
<body>
    <h1>Tambah Kategori Baru</h1>
    <form action="{{ route('kategori.store') }}" method="POST">
        @csrf
        <label for="name">Nama Kategori</label>
        <input type="text" name="nama_kategori" id="name" required><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
