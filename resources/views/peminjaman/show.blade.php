<h1>Detail Peminjaman</h1>
<p>Kelas: {{ $peminjaman->kelas->nama_kelas }}</p>
<p>Mapel: {{ $peminjaman->materi_praktik }}</p>
<p>Jam: {{ $peminjaman->jam_mulai }} sampai {{ $peminjaman->jam_selesai }}</p>

<br>
<br>
<a href="{{ route('detail.create', $peminjaman->id_peminjaman) }}" class="btn btn-primary">Tambah Siswa</a>
<table border="1">
    <thead>
        <tr>
            <th>Nama Siswa</th>
            <th>Narang yang dipinjam</th>
            <th>Jumlah</th>
            <th>Kelengkapan Pinjam</th>
        </tr>
    </thead>
    <tbody>
        @foreach($peminjaman->details as $detail)
        <tr>
            <td>{{ $detail->nama_peminjam }}</td>
            <td>{{ $detail->barang->nama_barang }}</td>
            <td>{{ $detail->jumlah_pinjam }}</td>
            <td>{{ $detail->kelengkapan_pinjam }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

{{-- @if($peminjaman->status === 'dipinjam')
<form action="{{ route('peminjaman.pengembalian', $peminjaman->id) }}" method="POST">
    @csrf
    <label for="tanggal_pengembalian">Tanggal Pengembalian:</label>
    <input type="date" name="tanggal_pengembalian" required>
    <button type="submit">Kembalikan</button>
</form>
@endif --}}
