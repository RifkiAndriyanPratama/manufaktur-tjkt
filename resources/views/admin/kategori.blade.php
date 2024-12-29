<x-layout-admin>
<div class="container mx-auto py-0">
    <h1 class="text-2xl font-bold mb-4">Management Kategori</h1>

    <!-- Search -->
    <div class="flex justify-between items-center mb-4">
        <!-- Form Pencarian -->
    <form action="{{ route('kategori.index') }}" method="GET" class="mb-4">
        <div class="relative">
            <input type="text" name="search" value="{{ request('search') }}" class="w-full border border-gray-300 rounded-lg p-2 pl-10" placeholder="Cari kategori">
            <svg class="absolute left-3 top-3 w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m-6.65 2A7.5 7.5 0 1117 10a7.5 7.5 0 01-7.5 7.5z" />
            </svg>
        </div>
    </form>
        
        <!-- Tombol Tambah Kategori -->
        <button 
            class="ml-4 bg-blue-800 hover:bg-blue-900 text-black font-bold py-2 px-4 rounded-md text-white flex items-center space-x-2" 
            onclick="document.getElementById('addModal').classList.remove('hidden')">
            <span class="font-bold text-xl">+</span>
            <span>Tambah Kategori</span>
        </button>
    </div>

    <!-- Tabel Kategori -->
    @if($kategori->isEmpty())
        <p class="text-center">Tidak ada Kategori yang tersedia.</p>
    @else
        <div class="overflow-x-auto rounded-xl">
            <table class="min-w-full bg-white rounded-xl">
                <thead class="bg-blue-800 text-white rounded-xl">
                    <tr>
                        <th class="px-4 py-2 text-left">No</th>
                        <th class="px-4 py-2 text-left">Nama Kategori</th>
                        <th class="px-4 py-2 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kategori as $index => $item)
                    <tr class="{{ $loop->odd ? 'bg-gray-200' : 'bg-gray-100' }} hover:bg-blue-200">
                        <td class="px-4 py-2">{{ $index + 1 }}</td>
                        <td class="px-4 py-2">{{ $item->nama_kategori }}</td>
                        <td class="px-4 py-2 text-center align-middle">
                            <div class="flex h-full space-x-2">
                                <!-- Tombol Edit -->
                                <button 
                                    onclick="document.getElementById('editModal-{{ $item->id_kategori }}').classList.remove('hidden')"
                                    class="text-blue-800 hover:text-blue-900 text-xl">
                                    <i class="fas fa-pen-to-square"></i>
                                </button>
                            
                                <!-- Tombol Hapus -->
                                <button 
                                    onclick="document.getElementById('deleteModal-{{ $item->id_kategori }}').classList.remove('hidden')"
                                    class="text-red-500 hover:text-red-600 text-xl">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Modal Edit -->
                    <div id="editModal-{{ $item->id_kategori }}" class="fixed inset-0 bg-gray-800 bg-opacity-50 hidden flex items-center justify-center">
                        <div class="bg-white rounded-lg shadow-lg w-1/3">
                            <div class="border-b px-4 py-2 flex justify-between rounded-t-lg bg-blue-800 items-center">
                                <h2 class="text-xl text-white font-bold">Edit Kategori</h2>
                                <button onclick="document.getElementById('editModal-{{ $item->id_kategori }}').classList.add('hidden')" class="text-white">&times;</button>
                            </div>
                            <form action="{{ route('kategori.update', $item->id_kategori) }}" method="POST" class="p-4">
                                @csrf
                                @method('PUT')
                                <div class="mb-4 px-4">
                                    <label for="nama_kategori" class="block text-gray-700">Nama Kategori</label>
                                    <input type="text" name="nama_kategori" value="{{ $item->nama_kategori }}" class="border rounded px-4 py-2 w-full" required>
                                </div>
                                <div class="flex justify-end py-4 px-4">
                                    <button type="button" onclick="document.getElementById('editModal-{{ $item->id_kategori }}').classList.add('hidden')" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mr-2">Batal</button>
                                    <button type="submit" class="bg-blue-800 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Modal Hapus -->
                    <div id="deleteModal-{{ $item->id_kategori }}" class="fixed inset-0 bg-gray-800 bg-opacity-50 hidden flex items-center justify-center">
                        <div class="bg-white rounded-lg shadow-lg w-1/3">
                            <div class="border-b px-4 py-2 flex justify-between rounded-t-lg bg-blue-800 items-center">
                                <h2 class="text-xl text-white font-bold">Konfirmasi Hapus</h2>
                                <button onclick="document.getElementById('deleteModal-{{ $item->id_kategori }}').classList.add('hidden')" class="text-white">&times;</button>
                            </div>
                            <div class="p-4">
                                <p>Apakah Anda yakin ingin menghapus kategori ini?</p>
                                <div class="flex justify-end mt-4">
                                    <button onclick="document.getElementById('deleteModal-{{ $item->id_kategori }}').classList.add('hidden')" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mr-2">Batal</button>
                                    <form action="{{ route('kategori.destroy', $item->id_kategori) }}" method="POST">
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
    @endif
    <!-- Modal Tambah Kategori -->
    <div id="addModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 hidden flex items-center justify-center">
        <div class="bg-white rounded-lg shadow-lg w-1/3">
            <div class="border-b px-4 py-2 flex justify-between rounded-t-lg bg-blue-800 items-center">
                <h2 class="text-xl text-white font-bold">Tambah Kategori</h2>
                <button onclick="document.getElementById('addModal').classList.add('hidden')" class="text-white">&times;</button>
            </div>
            <form action="{{ route('kategori.store') }}" method="POST" class="p-4">
                @csrf
                <div class="mb-4">
                    <label for="nama_kategori" class="block text-gray-700">Nama Kategori</label>
                    <input type="text" name="nama_kategori" placeholder="Tambah kategori" class="border rounded px-4 py-2 w-full" required>
                </div>
                <div class="flex justify-end">
                    <button type="button" onclick="document.getElementById('addModal').classList.add('hidden')" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mr-2">Batal</button>
                    <button type="submit" class="bg-blue-800 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
</x-layout-admin>
