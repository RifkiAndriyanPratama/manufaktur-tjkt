<h1>Detail Peminjaman</h1>
<p>Kelas: {{ $peminjaman->kelas->nama_kelas }}</p>
<p>Mapel: {{ $peminjaman->materi_praktik }}</p>
<p>Jam: {{ $peminjaman->jam_mulai }} sampai {{ $peminjaman->jam_selesai }}</p>
<table>
    <thead>
        <tr>
            <th>Nama Siswa</th>
            <th>Barang Dipinjam</th>
            <th>Jumlah</th>
        </tr>
    </thead>
    <tbody>
        @foreach($peminjaman->details as $detail)
        <tr>
            <td>{{ $detail->nama_siswa }}</td>
            <td>{{ $detail->barang_dipinjam }}</td>
            <td>{{ $detail->jumlah }}</td>
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
