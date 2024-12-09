<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
</head>
<body>
    <h1>Edit Barang</h1>
    <form action="{{ route('barang.update', $barang->id_barang) }}" method="POST">
        @csrf
        @method('PUT') 
        <label for="nama_barang">Nama Barang</label>
        <input type="text" name="nama_barang" id="nama_barang" value="{{ $barang->nama_barang }}" required><br>

        <label for="stok">Stok</label>
        <input type="number" name="stok" id="stok" value="{{ $barang->stok }}" required><br>

        <label for="kategori">Kategori</label>
        <select name="id_kategori" id="kategori" required>
            <option value="" disabled>Pilih Kategori</option>
            @foreach ($kategori as $k)
                <option value="{{ $k->id_kategori }}" 
                    {{ $k->id_kategori == $barang->id_kategori ? 'selected' : '' }}>
                    {{ $k->nama_kategori }}
                </option>
            @endforeach
        </select><br>

        <button type="submit">Simpan Perubahan</button>
    </form>
</body>
</html>
