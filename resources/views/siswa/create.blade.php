<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah siswa</title>
</head>
<body>
    <h1>Tambah siswa Baru</h1>
    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <label for="nama_siswa">Nama siswa</label>
        <input type="text" name="nama_siswa" id="nama_siswa" required><br>
        <label for="kelas">Kelas</label>
        <select name="id_kelas" id="kelas" required>
            <option value="" disabled selected>Pilih kelas</option>
            @foreach ($kelas as $k)
                <option value="{{ $k->id_kelas }}">{{ $k->nama_kelas }}</option>
            @endforeach
        </select><br>
        <button type="submit">Simpan siswa</button>
    </form>
</body>
</html>
