<x-layout-admin>
    <a href="{{ route('kategori.create') }}">Tambah Kategori</a>
    @if($kategori->isEmpty())
        <p>Tidak ada Kategori yang tersedia.</p>
    @else

    <form action="{{ route('kategori.index') }}" method="GET">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari kategori">
        <button type="submit">Cari</button>
    </form>
    <table border="1">
        <thead>
            <tr>
                <th>Nama Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kategori as $k)
                <tr>
                    <td>{{ $k->nama_kategori }}</td>
                    <td>
                        <!-- Edit Button -->
                        <a href="{{ route('kategori.edit', $k->id_kategori) }}">Edit</a> |
                        <!-- Delete Button -->
                        <form action="{{ route('kategori.destroy', $k->id_kategori) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</x-layout-admin>