<x-layout-admin>
<div class="container mx-auto py-0">
    <h1 class="text-2xl font-bold mb-4">Management Barang</h1>

    <!-- Search -->
    <div class="flex justify-between items-center mb-4">
    <form action="{{ route('barang.index') }}" method="GET" class="flex items-center w-full max-w-lg">
        <!-- Dropdown Kategori -->
        <select name="id_kategori" class="border border-gray-300 text-gray-500 text-center rounded-l-xl pr-8 py-2">
            <option class="text-left" value="all" {{ request('id_kategori') == 'all' ? 'selected' : '' }}>All Kategory</option>
            @foreach ($kategori as $k)
                <option class="text-left" value="{{ $k->id_kategori }}" {{ request('id_kategori') == $k->id_kategori ? 'selected' : '' }}>
                    {{ $k->nama_kategori }}
                </option>
            @endforeach
        </select>

        <!-- Input Pencarian -->
        <div class="relative flex-grow">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari barang..." class="border border-gray-300 rounded-r-xl px-4 py-2 w-full focus:outline-none">
        </div>

        <!-- Tombol Search -->
        <button type="submit" class="ml-2 bg-blue-800 text-white px-4 py-2 rounded-lg flex items-center justify-center">    
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="currentColor" class="w-6 h-6">
                <circle cx="27" cy="27" r="16" stroke="currentColor" stroke-width="4" fill="none"></circle>
                <rect x="38" y="38" width="8" height="20" rx="4" transform="rotate(45 38 38)" fill="currentColor"></rect>
                <circle cx="22" cy="22" r="5" fill="white" opacity="0.5"></circle>
                <line x1="20" y1="16" x2="24" y2="20" stroke="white" stroke-width="2" opacity="0.7"></line>
            </svg>
        </button>

    </form>
    
        <!-- Tombol Tambah Barang -->
        <button 
            class="ml-4 bg-blue-800 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded-md flex items-center space-x-2" 
            onclick="document.getElementById('addModal').classList.remove('hidden')">
            <span class="font-bold text-xl">+</span>
            <span>Tambah Barang</span>
        </button>
    </div>

    <!-- Tabel Barang -->
    <div class="overflow-x-auto rounded-xl">
        <table class="min-w-full bg-white rounded-xl">
            <thead class="bg-blue-800 text-white border rounded-xl">
                <tr>
                    <th class="px-4 py-2 text-left">No</th>
                    <th class="px-4 py-2 text-left">Nama Barang</th>
                    <th class="px-4 py-2 text-left">Nama Kategori</th>
                    <th class="px-4 py-2 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($barang as $index => $item)
                <tr class="{{ $loop->odd ? 'bg-gray-200' : 'bg-gray-100' }} hover:bg-blue-200">
                    <td class="px-4 py-2">{{ $index + 1 }}</td>
                    <td class="px-4 py-2">{{ $item->nama_barang }}</td>
                    <td class="px-4 py-2">{{ $item->kategori->nama_kategori }}</td>
                    <td class="px-4 py-2 text-center align-middle">
                        <div class="flex  h-full space-x-2">
                            <!-- Tombol Edit -->
                            <button 
                                onclick="document.getElementById('editModal-{{ $item->id_barang }}').classList.remove('hidden')"
                                class="text-blue-800 hover:text-blue-900 text-xl">
                                <i class="fas fa-pen-to-square"></i>
                            </button>
                    
                            <!-- Tombol Hapus -->
                            <button 
                                onclick="document.getElementById('deleteModal-{{ $item->id_barang }}').classList.remove('hidden')"
                                class="text-red-500 hover:text-red-600 text-xl">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                
                <!-- Modal Edit -->
                <div id="editModal-{{ $item->id_barang }}" class="fixed inset-0 bg-gray-800 bg-opacity-50 hidden flex items-center justify-center">
                    <div class="bg-white rounded-lg shadow-lg w-1/3">
                        <div class="border-b px-4 py-2 flex justify-between rounded-t-lg bg-blue-800 items-center">
                            <h2 class="text-xl text-white font-bold">Edit Barang</h2>
                            <button onclick="document.getElementById('editModal-{{ $item->id_barang }}').classList.add('hidden')" class="text-white">&times;</button>
                        </div>
                        <form action="{{ route('barang.update', $item->id_barang) }}" method="POST" class="p-4">
                            @csrf
                            @method('PUT')
                            <div class="mb-4 px-4">
                                <label for="nama_barang" class="block text-gray-700">Nama Barang</label>
                                <input type="text" name="nama_barang" value="{{ $item->nama_barang }}" class="border rounded px-4 py-2 w-full" required>
                            </div>
                            <div class="mb-4 px-4">
                                <label for="id_kategori" class="block text-gray-700">Kategori</label>
                                <select name="id_kategori" class="border rounded px-4 py-2 w-full" required>
                                    @foreach ($kategori as $k)
                                        <option value="{{ $k->id_kategori }}" {{ $item->id_kategori == $k->id_kategori ? 'selected' : '' }}>
                                            {{ $k->nama_kategori }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex justify-end py-4 px-4">
                                <button type="button" onclick="document.getElementById('editModal-{{ $item->id_barang }}').classList.add('hidden')" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mr-2">Batal</button>
                                <button type="submit" class="bg-blue-800 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Modal Hapus -->
                <div id="deleteModal-{{ $item->id_barang }}" class="fixed inset-0 bg-gray-800 bg-opacity-50 hidden flex items-center justify-center">
                    <div class="bg-white rounded-lg shadow-lg w-1/3">
                        <div class="border-b px-4 py-2 flex justify-between items-center rounded-t-lg bg-blue-800">
                            <h2 class="text-xl text-white font-bold">Konfirmasi Hapus</h2>
                            <button onclick="document.getElementById('deleteModal-{{ $item->id_barang }}').classList.add('hidden')" class="text-white">&times;</button>
                        </div>
                        <div class="p-4">
                            <p>Apakah Anda yakin ingin menghapus barang ini?</p>
                            <div class="flex justify-end mt-4">
                                <button onclick="document.getElementById('deleteModal-{{ $item->id_barang }}').classList.add('hidden')" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mr-2">Batal</button>
                                <form action="{{ route('barang.destroy', $item->id_barang) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-blue-800 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal Tambah Barang -->
    <div id="addModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 hidden flex items-center justify-center">
        <div class="bg-white rounded-lg shadow-lg w-1/3">
            <div class="border-b px-4 py-2 flex justify-between bg-blue-800 rounded-t-lg items-center">
                <h2 class="text-xl font-bold text-white">Tambah Barang</h2>
                <button onclick="document.getElementById('addModal').classList.add('hidden')" class="text-white">&times;</button>
            </div>
            <form action="{{ route('barang.store') }}" method="POST" class="p-4">
                @csrf
                <div class="mb-4">
                    <label for="nama_barang" class="block text-gray-700">Nama Barang</label>
                    <input type="text" name="nama_barang" placeholder="Masukan nama barang" class="border rounded px-4 py-2 w-full" required>
                </div>
                <div class="mb-4">
                    <label for="id_kategori" class="block text-gray-700">Kategori</label>
                    <select name="id_kategori" class="border rounded px-4 py-2 w-full" required>
                        @foreach ($kategori as $k)
                            <option value="{{ $k->id_kategori }}">{{ $k->nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex justify-end">
                    <button type="button" onclick="document.getElementById('addModal').classList.add('hidden')" class="flex bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mr-2">Batal</button>
                    <button type="submit" class="flex bg-blue-800 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>

</x-layout-admin>