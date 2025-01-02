<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Peminjaman</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class="bg-gray-100 h-screen flex flex-col p-6">
    <h1 class="text-3xl font-semibold text-gray-800 mb-4">Detail Peminjaman</h1>
    <div class="bg-gray-200 rounded-lg p-4 mb-4">
        <p class="text-gray-700">Kelas: <span class="font-bold">{{ $peminjaman->kelas->nama_kelas }}</span></p>
        <p class="text-gray-700">Materi: <span class="font-bold">{{ $peminjaman->materi_praktik }}</span></p>
        <p class="text-gray-700">Jam: <span class="font-bold">{{ $peminjaman->jam_mulai }} sampai {{ $peminjaman->jam_selesai }}</span></p>
    </div>

    <div class="flex justify-between items-center mb-4">
        <h2 class="text-lg font-semibold text-gray-800">Daftar Peminjaman</h2>
        <button id="openMainModal" class="bg-blue-500 text-white px-4 py-2 rounded-lg flex items-center hover:bg-blue-600 transition duration-200">
            <i class="fas fa-plus mr-2"></i> Tambah Detail
        </button>
    </div>

    <div class="bg-gray-200 flex-grow rounded-lg p-6">
        <div class="overflow-x-auto">
            <table class="table-auto w-full border-collapse border border-gray-300 shadow-lg">
                <thead>
                    <tr class="bg-gray-300">
                        <th class="border border-gray-300 px-4 py-2 text-left">Nama Siswa</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Kategori</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Barang yang Dipinjam</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Jumlah</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Kelengkapan Pinjam</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($peminjaman->details as $detail)
                    <tr class="bg-white hover:bg-gray-100 transition duration-150">
                        <td class="border border-gray-300 px-4 py-2">{{ $detail->nama_peminjam }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $detail->kategori->nama_kategori }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $detail->barang->nama_barang }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $detail->jumlah_pinjam }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $detail->kelengkapan_pinjam }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div id="modalForm" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-md">
            <!-- Header -->
            <div class="flex justify-between items-center border-b p-4">
                <h2 class="text-lg font-semibold">Tambah Detail Peminjaman</h2>
                <button id="closeModal" class="text-gray-600 hover:text-gray-900">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <!-- Form Content -->
            <div class="p-6">
                <form id="modalForm" action="{{ route('detail.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id_peminjaman" value="{{ $peminjaman->id_peminjaman }}">
                    <!-- Kelas -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 ">Kelas</label>
                        <input type="text" value="{{ $peminjaman->kelas->nama_kelas }}" class="w-full border border-gray-300 rounded-lg p-2 bg-gray-100" readonly>
                        <input type="hidden" name="id_kelas" value="{{ $peminjaman->kelas->id_kelas }}">
                    </div>
                    <!-- Nama -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Nama</label>
                        <input type="text" name="nama_peminjam" placeholder="Masukkan Nama" class="w-full border border-gray-300 rounded-lg p-2 bg-gray-100" required>
                    </div>
                    <!-- Kategori -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Kategori</label>
                        <select name="id_kategori" class="w-full border border-gray-300 rounded-lg p-2 bg-gray-100" required>
                            <option value="" disabled selected>Pilih kategori</option>
                            @foreach($kategori as $k)
                                <option value="{{ $k->id_kategori }}">{{ $k->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- Barang -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Barang</label>
                        <select name="id_barang" class="w-full border border-gray-300 rounded-lg p-2 bg-gray-100" required>
                            <option value="" disabled selected>Pilih barang</option>
                            @foreach($barang as $b)
                                <option value="{{ $b->id_barang }}">{{ $b->nama_barang }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- Jumlah -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Jumlah</label>
                        <input type="number" name="jumlah_pinjam" min="1" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <!-- Kelengkapan -->
                    <div class="mb-4">
                        <span class="block text-sm font-medium text-gray-700">Kelengkapan</span>
                        <div class="flex items-center">
                            <label class="mr-4">
                                <input type="radio" name="kelengkapan_pinjam" value="lengkap" required> Lengkap
                            </label>
                            <label>
                                <input type="radio" name="kelengkapan_pinjam" value="tidak" required> Tidak
                            </label>
                        </div>
                    </div>
                    <!-- Submit Button -->
                    <button type="submit" class="w-full bg-blue-600 text-white rounded-md py-2">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Script for Modal -->
    <script>
        const openMainModal = document.getElementById('openMainModal');
        const closeMainModal = document.getElementById('closeModal');
        const mainModal = document.getElementById('modalForm');

        // Open modal
        openMainModal.addEventListener('click', (e) => {
            e.preventDefault(); // Prevent default link behavior
            mainModal.classList.remove('hidden');
        });

        // Close modal
        closeMainModal.addEventListener('click', () => {
            mainModal.classList.add('hidden');
        });

        // Close modal on overlay click
        window.addEventListener('click', (e) => {
            if (e.target === mainModal) {
                mainModal.classList.add('hidden');
            }
        });
    </script>
</body>

</html>
        



<!-- {{-- @if($peminjaman->status === 'dipinjam')
                        <form action="{{ route('peminjaman.pengembalian', $peminjaman->id) }}" method="POST">
                            @csrf
                            <label for="tanggal_pengembalian">Tanggal Pengembalian:</label>
                            <input type="date" name="tanggal_pengembalian" required>
                            <button type="submit">Kembalikan</button>
                        </form>
                        @endif --}} -->