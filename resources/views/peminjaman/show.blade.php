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
<div id="modalForm" style="display: none; position: fixed; inset: 0; background-color: rgba(0, 0, 0, 0.5); display: flex; justify-content: center; align-items: center; z-index: 50;">
    <div style="background-color: white; border-radius: 8px; width: 100%; max-width: 400px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <!-- Header -->
        <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #ddd; padding: 16px;">
            <h2 style="font-size: 18px; font-weight: bold; margin: 0;">Lorem ipsum dolor</h2>
            <button id="closeModal" style="background: none; border: none; font-size: 18px; cursor: pointer;">&times;</button>
        </div>
        <!-- Tabs -->
        <div style="padding: 16px; border-bottom: 1px solid #ddd;">
            <ul style="display: flex; list-style: none; padding: 0; margin: 0;">
                <li class="tab" style="margin-right: 16px; padding-bottom: 8px; cursor: pointer; border-bottom: 2px solid blue; color: blue;">Peminjaman</li>
                <li class="tab" style="padding-bottom: 8px; cursor: pointer; color: gray;">Pengembalian</li>
            </ul>
        </div>
        <!-- Form Content -->
        <div style="padding: 16px;">
            <form>
                <!-- Kelas -->
                <div style="margin-bottom: 16px;">
                    <label style="display: block; font-size: 14px; font-weight: bold;">Kelas</label>
                    <select style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
                        <option>Pilih kelas</option>
                        <option>XII TJK B</option>
                    </select>
                </div>
                <!-- Nama -->
                <div style="margin-bottom: 16px;">
                    <label style="display: block; font-size: 14px; font-weight: bold;">Nama</label>
                    <input type="text" placeholder="Masukkan Nama" style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
                </div>
                <!-- Kategori -->
                <div style="margin-bottom: 16px;">
                    <label style="display: block; font-size: 14px; font-weight: bold;">Kategori</label>
                    <select style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
                        <option>Pilih kategori</option>
                        <option>Laptop</option>
                    </select>
                </div>
                <!-- Merk -->
                <div style="margin-bottom: 16px;">
                    <label style="display: block; font-size: 14px; font-weight: bold;">Merk</label>
                    <select style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
                        <option>Pilih merk</option>
                        <option>Asus</option>
                    </select>
                </div>
                <!-- Nama Barang -->
                <div style="margin-bottom: 16px;">
                    <label style="display: block; font-size: 14px; font-weight: bold;">Nama barang</label>
                    <select style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
                        <option>Pilih barang</option>
                        <option>Asus ROG STRIX SCAR 18</option>
                    </select>
                </div>
                <!-- Jumlah -->
                <div style="margin-bottom: 16px;">
                    <label style="display: block; font-size: 14px; font-weight: bold;">Jumlah</label>
                    <div style="display: flex; align-items: center;">
                        <button type="button" style="padding: 8px; background-color: #ddd; border: none; border-radius: 4px;">-</button>
                        <input type="number" value="1" readonly style="width: 60px; text-align: center; border: 1px solid #ddd; margin: 0 8px; border-radius: 4px;">
                        <button type="button" style="padding: 8px; background-color: #ddd; border: none; border-radius: 4px;">+</button>
                    </div>
                </div>
                <!-- Kelengkapan -->
                <div style="margin-bottom: 16px;">
                    <span style="display: block; font-size: 14px; font-weight: bold;">Kelengkapan</span>
                    <div>
                        <label>
                            <input type="radio" name="kelengkapan" value="lengkap"> Lengkap
                        </label>
                        <label style="margin-left: 16px;">
                            <input type="radio" name="kelengkapan" value="tidak"> Tidak
                        </label>
                    </div>
                </div>
                <!-- Keterangan -->
                <div style="margin-bottom: 16px;">
                    <label style="display: block; font-size: 14px; font-weight: bold;">Keterangan</label>
                    <textarea style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px;" rows="3"></textarea>
                </div>
                <!-- Submit Button -->
                <button type="submit" style="width: 100%; padding: 8px; background-color: blue; color: white; border: none; border-radius: 4px; font-weight: bold;">Simpan</button>
            </form>
        </div>
    </div>
</div>


    <!-- Script for Modal -->
    <script>
        const openMainModal = document.getElementById('openMainModal');
        const closeMainModal = document.getElementById('closeMainModal');
        const mainModal = document.getElementById('mainModal');

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