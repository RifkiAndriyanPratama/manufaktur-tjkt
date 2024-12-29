<x-layout-admin>
<div class="text-white p-0 flex justify-around gap-4 rounded-t-lg items-center sticky top-0">
    <!-- Jumlah Barang -->
    <div class="bg-blue-500 flex items-center justify-center w-60 h-40 rounded shadow-lg">
        <div class="text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l1-7H6.4m-1.4 0L5 6H3m4 7v8m10-8v8m-6-8v8m8-18h2a1 1 0 011 1v16a1 1 0 01-1 1h-2M4 21h16" />
            </svg>
            <p class="text-lg font-semibold">Jumlah Barang</p>
            <p class="text-sm">{{ $jumlahBarang }} barang</p>
        </div>
    </div>

    <!-- Jumlah Detail Peminjaman -->
    <div class="bg-green-500 flex items-center justify-center w-60 h-40 rounded shadow-lg">
        <div class="text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 4V6a2 2 0 00-2-2H6a2 2 0 00-2 2v8a2 2 0 002 2h8l4 4m-4-4h4" />
            </svg>
            <p class="text-lg font-semibold">Detail Peminjaman</p>
            <p class="text-sm">{{ $jumlahDetail }} detail</p>
        </div>
    </div>

    <!-- Jumlah Kategori -->
    <div class="bg-yellow-500 flex items-center justify-center w-60 h-40 rounded shadow-lg">
        <div class="text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 014 4V12h-8V8.354a4 4 0 014-4zM8 12h8v6a4 4 0 11-8 0v-6z" />
            </svg>
            <p class="text-lg font-semibold">Jumlah Kategori</p>
            <p class="text-sm">{{ $jumlahKategori }} kategori</p>
        </div>
    </div>

    <!-- Jumlah Kelas -->
    <div class="bg-red-500 flex items-center justify-center w-60 h-40 rounded shadow-lg">
        <div class="text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 4V6a2 2 0 00-2-2H6a2 2 0 00-2 2v8a2 2 0 002 2h8l4 4m-4-4h4" />
            </svg>
            <p class="text-lg font-semibold">Jumlah Kelas</p>
            <p class="text-sm">{{ $jumlahKelas }} kelas</p>
        </div>
    </div>
</div>
</x-layout-admin>