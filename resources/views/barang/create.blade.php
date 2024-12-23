<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
</head>
<body>
    <h1>Tambah Barang Baru</h1>
    <form action="{{ route('barang.store') }}" method="POST">
        @csrf
        <label for="nama_barang">Nama Barang</label>
        <input type="text" name="nama_barang" id="nama_barang" required><br>
        <label for="kategori">Kategori</label>
        <select name="id_kategori" id="kategori" required>
            <option value="" disabled selected>Pilih Kategori</option>
            @foreach ($kategori as $k)
                <option value="{{ $k->id_kategori }}">{{ $k->nama_kategori }}</option>
            @endforeach
        </select><br>
        <button type="submit">Simpan Barang</button>
    </form>
</body>
</html>
