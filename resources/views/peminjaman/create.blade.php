<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah peminjaman</title>
</head>
<body>
    <h1>Tambah peminjaman Baru</h1>
    <form action="{{ route('peminjaman.store') }}" method="POST">
        @csrf
        <label for="kelas">Kelas</label>
        <select name="id_kelas" id="kelas" required>
            <option value="" disabled selected>Pilih Kelas</option>
            @foreach ($kelas as $k)
                <option value="{{ $k->id_kelas }}">{{ $k->nama_kelas }}</option>
            @endforeach
        </select><br>
        <label for="guru_pembimbing">Guru Pembimbing</label>
        <input type="text" name="guru_pembimbing" id="guru_pembimbing" required><br>
        <label for="materi_praktik">Materi Praktik</label>
        <input type="text" name="materi_praktik" id="materi_praktik" required><br>
        <label for="jam_mulai">Jam Mulai</label>
        <input type="string" name="jam_mulai" id="jam_mulai" required><br>
        <label for="jam_selesai">Jam Selesai</label>
        <input type="string" name="jam_selesai" id="jam_selesai" required><br>
        <button type="string">Simpan peminjaman</button>
    </form>
</body>
</html>

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
                        <th class="border border-gray-300 px-4 py-2 text-left">Barang yang Dipinjam</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Jumlah</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Kelengkapan Pinjam</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($peminjaman->details as $detail)
                    <tr class="bg-white hover:bg-gray-100 transition duration-150">
                        <td class="border border-gray-300 px-4 py-2">{{ $detail->nama_peminjam }}</td>
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
        <div class="bg-white rounded-lg shadow-lg w-full max-w-lg">
            <!-- Header -->
            <div class="flex justify-between items-center border-b p-4">
                <h2 class="text-lg font-semibold">Lorem ipsum dolor</h2>
                <button id="closeModal" class="text-gray-600 hover:text-gray-900">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <!-- Tabs -->
            <div class="p-4 border-b">
                <div class="flex space-x-4">
                    <button id="tabPeminjaman" class="py-2 px-4 text-blue-600 border-b-2 border-blue-600 focus:outline-none">Peminjaman</button>
                    <button id="tabPengembalian" class="py-2 px-4 text-gray-600 border-b-2 border-transparent hover:text-blue-600 focus:outline-none">Pengembalian</button>
                </div>
            </div>
            <!-- Form Content -->
            <div class="p-6">
                <form id="peminjamanForm" action="{{ route('peminjaman.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Kelas</label>
                        <select class="block w-full border-gray-300 rounded-md shadow-sm" required>
                            <option value="" disabled selected>Pilih kelas</option>
                            <!-- Add dynamic options -->
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nama</label>
                        <input type="text" class="block w-full border-gray-300 rounded-md shadow-sm p-2" placeholder="Masukkan Nama" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Jumlah</label>
                        <div class="flex items-center">
                            <button type="button" class="p-2 bg-gray-200 border">-</button>
                            <input type="number" class="w-12 text-center border-t border-b" min="1" value="1" required>
                            <button type="button" class="p-2 bg-gray-200 border">+</button>
                        </div>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 text-white rounded-md py-2">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        const openMainModal = document.getElementById('openMainModal');
        const closeMainModal = document.getElementById('closeModal');
        const mainModal = document.getElementById('modalForm');
        const tabPeminjaman = document.getElementById('tabPeminjaman');
        const tabPengembalian = document.getElementById('tabPengembalian');
        const peminjamanForm = document.getElementById('peminjamanForm');

        // Open Modal
        openMainModal.addEventListener('click', () => mainModal.classList.remove('hidden'));

        // Close Modal
        closeMainModal.addEventListener('click', () => mainModal.classList.add('hidden'));

        // Tab Switching
        tabPeminjaman.addEventListener('click', () => {
            tabPeminjaman.classList.add('border-blue-600', 'text-blue-600');
            tabPengembalian.classList.remove('border-blue-600', 'text-blue-600');
        });

        tabPengembalian.addEventListener('click', () => {
            tabPengembalian.classList.add('border-blue-600', 'text-blue-600');
            tabPeminjaman.classList.remove('border-blue-600', 'text-blue-600');
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