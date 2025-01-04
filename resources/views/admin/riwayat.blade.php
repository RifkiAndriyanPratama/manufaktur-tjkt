<x-layout-admin>
    <div class="container mx-auto py-0">
    <h1 class="text-2xl font-bold mb-4">Riwayat Peminjaman</h1>    
    <div>
        <div>
            <div class="flex justify-end gap-2">
                <form method="GET" action="{{ route('peminjaman.riwayat') }}" class="flex items-center gap-4">
                    <select name="bulan" class="border rounded p-2">
                        <option value="">Pilih Bulan</option>
                        @php
                        $bulanIndo = [
                            1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
                        ];
                        @endphp
                        @foreach ($bulanIndo as $index => $namaBulan)
                            <option value="{{ $index }}" {{ request('bulan') == $index ? 'selected' : '' }}>
                                {{ $namaBulan }}
                            </option>
                        @endforeach
                    </select>
                    <select name="tahun" class="border rounded p-2">
                        <option value="">Pilih Tahun</option>
                        @foreach (range(date('Y') - 5, date('Y')) as $year)
                            <option value="{{ $year }}" {{ request('tahun') == $year ? 'selected' : '' }}>
                                {{ $year }}
                            </option>
                        @endforeach
                    </select>
                    <button type="submit" class="p-2 bg-blue-500 text-white rounded">Filter</button>
                </form>
                <div class="py-4">
                    <a href="{{ route('exportPdf', ['bulan' => request('bulan'), 'tahun' => request('tahun')]) }}" class="p-2 bg-red-600 rounded-lg text-white flex items-center gap-2">
                        <svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.75 0.5C10.75 0.433696 10.7237 0.370107 10.6768 0.323223C10.6299 0.276339 10.5663 0.25 10.5 0.25H3.5C2.77065 0.25 2.07118 0.539731 1.55546 1.05546C1.03973 1.57118 0.75 2.27065 0.75 3V17C0.75 17.7293 1.03973 18.4288 1.55546 18.9445C2.07118 19.4603 2.77065 19.75 3.5 19.75H13.5C14.2293 19.75 14.9288 19.4603 15.4445 18.9445C15.9603 18.4288 16.25 17.7293 16.25 17V7.147C16.25 7.0807 16.2237 7.01711 16.1768 6.97022C16.1299 6.92334 16.0663 6.897 16 6.897H11.5C11.3011 6.897 11.1103 6.81798 10.9697 6.67733C10.829 6.53668 10.75 6.34591 10.75 6.147V0.5ZM11.5 10.25C11.6989 10.25 11.8897 10.329 12.0303 10.4697C12.171 10.6103 12.25 10.8011 12.25 11C12.25 11.1989 12.171 11.3897 12.0303 11.5303C11.8897 11.671 11.6989 11.75 11.5 11.75H5.5C5.30109 11.75 5.11032 11.671 4.96967 11.5303C4.82902 11.3897 4.75 11.1989 4.75 11C4.75 10.8011 4.82902 10.6103 4.96967 10.4697C5.11032 10.329 5.30109 10.25 5.5 10.25H11.5ZM11.5 14.25C11.6989 14.25 11.8897 14.329 12.0303 14.4697C12.171 14.6103 12.25 14.8011 12.25 15C12.25 15.1989 12.171 15.3897 12.0303 15.5303C11.8897 15.671 11.6989 15.75 11.5 15.75H5.5C5.30109 15.75 5.11032 15.671 4.96967 15.5303C4.82902 15.3897 4.75 15.1989 4.75 15C4.75 14.8011 4.82902 14.6103 4.96967 14.4697C5.11032 14.329 5.30109 14.25 5.5 14.25H11.5Z" fill="white"/>
                            <path d="M12.25 0.823468C12.25 0.639468 12.443 0.522468 12.586 0.637468C12.7073 0.735468 12.815 0.849468 12.909 0.979468L15.922 5.17647C15.99 5.27247 15.916 5.39647 15.798 5.39647H12.5C12.4337 5.39647 12.3701 5.37013 12.3232 5.32325C12.2763 5.27636 12.25 5.21277 12.25 5.14647V0.823468Z" fill="white"/>
                        </svg>
                        <span>Download PDF</span>
                    </a>
                </div>
                <div class="py-4">
                    <a href="{{ route("excel", ['bulan' => request('bulan'), 'tahun' => request('tahun')]) }}" class="p-2 bg-green-600 rounded-lg text-white flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="22" height="22" viewBox="0 0 50 50">
                        <path d="M 28.8125 0.03125 L 0.8125 5.34375 C 0.339844 5.433594 0 5.863281 0 6.34375 L 0 43.65625 C 0 44.136719 0.339844 44.566406 0.8125 44.65625 L 28.8125 49.96875 C 28.875 49.980469 28.9375 50 29 50 C 29.230469 50 29.445313 49.929688 29.625 49.78125 C 29.855469 49.589844 30 49.296875 30 49 L 30 1 C 30 0.703125 29.855469 0.410156 29.625 0.21875 C 29.394531 0.0273438 29.105469 -0.0234375 28.8125 0.03125 Z M 32 6 L 32 13 L 34 13 L 34 15 L 32 15 L 32 20 L 34 20 L 34 22 L 32 22 L 32 27 L 34 27 L 34 29 L 32 29 L 32 35 L 34 35 L 34 37 L 32 37 L 32 44 L 47 44 C 48.101563 44 49 43.101563 49 42 L 49 8 C 49 6.898438 48.101563 6 47 6 Z M 36 13 L 44 13 L 44 15 L 36 15 Z M 6.6875 15.6875 L 11.8125 15.6875 L 14.5 21.28125 C 14.710938 21.722656 14.898438 22.265625 15.0625 22.875 L 15.09375 22.875 C 15.199219 22.511719 15.402344 21.941406 15.6875 21.21875 L 18.65625 15.6875 L 23.34375 15.6875 L 17.75 24.9375 L 23.5 34.375 L 18.53125 34.375 L 15.28125 28.28125 C 15.160156 28.054688 15.035156 27.636719 14.90625 27.03125 L 14.875 27.03125 C 14.8125 27.316406 14.664063 27.761719 14.4375 28.34375 L 11.1875 34.375 L 6.1875 34.375 L 12.15625 25.03125 Z M 36 20 L 44 20 L 44 22 L 36 22 Z M 36 27 L 44 27 L 44 29 L 36 29 Z M 36 35 L 44 35 L 44 37 L 36 37 Z" fill="white"></path>
                    </svg>
                    <span>Download Excel</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Tabel Riwayat -->
    @if($detail->isEmpty())
        <p class="text-center">Tidak ada peminjaman.</p>
    @else
        <div class="overflow-x-auto rounded-xl">
            <table class="min-w-full bg-white rounded-xl">
                <thead class="bg-blue-800 text-white border rounded-xl">
                    <tr>
                        <th class="px-4 py-2 text-left">No</th>
                        <th class="px-4 py-2 text-left">Nama Peminjam</th>
                        <th class="px-4 py-2 text-left">Kelas</th>
                        <th class="px-4 py-2 text-left">Nama Barang</th>
                        <th class="px-4 py-2 text-left">Jumlah</th>
                        <th class="px-4 py-2 text-left">Kelengkapan Pinjam</th>
                        <th class="px-4 py-2 text-left">Kelengkapan Kembali</th>
                    </tr>
                </thead>
                <tbody id="barangTable">
                    @foreach($detail as $index => $item)
                    <tr class="{{ $loop->odd ? 'bg-gray-200' : 'bg-gray-100' }} hover:bg-blue-200">
                        <td class="px-4 py-2">{{ $index + 1 }}</td>
                        <td class="px-4 py-2">{{ $item->nama_peminjam }}</td>
                        <td class="px-4 py-2">{{ $item->peminjaman->kelas->nama_kelas }}</td>
                        <td class="px-4 py-2">{{ $item->barang->nama_barang }}</td>
                        <td class="px-4 py-2">{{ $item->jumlah_pinjam }}</td>
                        <td class="px-4 py-2">{{ $item->kelengkapan_pinjam }}</td>
                        <td class="px-4 py-2">{{ $item->kelengkapan_kembali }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
</x-layout-admin>