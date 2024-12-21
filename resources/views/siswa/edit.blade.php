<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit siswa</title>
</head>
<body>
    <h1>Edit siswa</h1>
    <form action="{{ route('siswa.update', $siswa->id_siswa) }}" method="POST">
        @csrf
        @method('PUT') 
        <label for="nama_siswa">Nama siswa</label>
        <input type="text" name="nama_siswa" id="nama_siswa" value="{{ $siswa->nama_siswa }}" required><br>

        <label for="kelas">kelas</label>
        <select name="id_kelas" id="kelas" required>
            <option value="" disabled>Pilih kelas</option>
            @foreach ($kelas as $k)
                <option value="{{ $k->id_kelas }}" 
                    {{ $k->id_kelas == $siswa->id_kelas ? 'selected' : '' }}>
                    {{ $k->nama_kelas }}
                </option>
            @endforeach
        </select><br>

        <button type="submit">Simpan Perubahan</button>
    </form>
</body>
</html>
