<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
</head>
<body>
    <h1>Tambah Siswa Baru</h1>
    <form action="{{ route('detail.store') }}" method="POST">
        @csrf
        <input type="hidden" name="id_peminjaman" value="{{ $id_peminjaman }}">
        <label for="nama_peminjam">Nama Peminjam</label>
        <input type="text" name="nama_peminjam" id="nama_peminjam" required><br>
        <label for="nama_barang">Barang</label>
        <select name="id_barang" id="nama_barang" required>
            <option value="" disabled selected>Pilih Barang</option>
            @foreach ($barang as $b)
                <option value="{{ $b->id_barang }}">{{ $b->nama_barang }}</option>
            @endforeach
        </select><br>
        <label for="jumlah_pinjam">Jumlah Pinjam</label>
        <input type="number" name="jumlah_pinjam" id="jumlah_peminjam" required><br>
        <label for="kelengkapan_pinjam">Kelengkapan Pinjam</label>
        <input type="text" name="kelengkapan_pinjam" id="kelengkapan_pinjam" required><br>
        <label for="kelengkapan_kembali ">Kelengkapan Kembali</label>
        <input type="text" name="kelengkapan_kembali" id="kelengkapan_kembali" required><br>
        <button type="submit">Simpan peminjaman</button>
    </form>
</body>
</html>
