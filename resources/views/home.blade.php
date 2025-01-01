<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">                   <!-- font Viga -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">   <!-- Icon Search -->
    <link href="{{ asset('toastr/toastr.min.css') }}" rel="stylesheet">  <!-- toastr -->

</head> 
<body class="font-sans">

<!-- Navbar -->
<nav class="fixed w-full bg-gradient-to-r from-blue-900 to-blue-500 p-6 z-10">
    <div class="container mx-auto flex justify-between items-center">
        <div class="flex items-center justify-start">
            <a href="{{ Auth::check() ? route('admin.management') : route('login') }}" class="font-[Viga] text-3xl text-gray-200">LENDIFY</a>
        </div>
         <div class="relative w-96">
                <!-- Form untuk pencarian -->
                <form id="searchForm">
                    <input type="text" id="searchInput" name="search" value="{{ request('#') }}" placeholder="Cari..." 
                        class="w-full py-2 pl-4 pr-10 text-white bg-blue-800 rounded-full focus:outline-none placeholder-white" 
                        value="{{ request('#') }}">
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                        <button type="submit" class="text-white">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</nav>

<!-- Section -->
<section class="pt-24 bg-gradient-to-r from-blue-50 to-blue-200 py-8">
    <div class="container mx-auto flex flex-col lg:flex-row items-center">
        <!-- Teks -->
        <div class="lg:w-1/2 mb-8 lg:mb-0">
            <h2 class="text-2xl font-semibold mb-2">Form peminjaman alat SMKN 1 PUNDONG</h2>
            <p class="text-gray-600">
                Lorem ipsum dolor sit amet consectetur. Tempus orci donec sed aenean.<br>
                Adipiscing lacus ornare gravida in aliquet. Amet vitae duis at sit.<br>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.<br>
                Asperiores similique non veniam, tempore assumenda,<br>
                totam ut aliquam dolorem provident perferendis delectus<br>
                molestias, exercitationem incidunt facilis commodi natus<br>
                eaque sequi suscipit.
            </p>
        </div>
        <!-- Gambar -->
        <div class="lg:w-1/2 flex justify-end mr-20 h-35 w-35">
            <img 
                src="{{ asset('assets/images/Gambar LaptopdanKomputer.png') }}" 
                class="max-w-full lg:max-w-lg"
            />
        </div>
    </div>
</section>


<!-- Main Content -->
<main class="container mx-auto py-8">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <!-- Add Card -->
         <div id="AddCard">
         <a href="#" id="openModal">
            <div class="bg-gray-100 shadow flex justify-center items-center w-full h-60 rounded-lg hover:bg-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71 71" fill="none" class="w-16 h-16" style="color: #0E21A1;">
                <path d="M65.9286 40.5714H40.5714V65.9286C40.5714 67.2736 40.0371 68.5635 39.086 69.5146C38.135 70.4657 36.845 71 35.5 71C34.155 71 32.865 70.4657 31.914 69.5146C30.9629 68.5635 30.4286 67.2736 30.4286 65.9286V40.5714H5.07143C3.7264 40.5714 2.43647 40.0371 1.48539 39.086C0.534311 38.135 0 36.845 0 35.5C0 34.155 0.534311 32.865 1.48539 31.914C2.43647 30.9629 3.7264 30.4286 5.07143 30.4286H30.4286V5.07143C30.4286 3.7264 30.9629 2.43646 31.914 1.48539C32.865 0.534308 34.155 0 35.5 0C36.845 0 38.135 0.534308 39.086 1.48539C40.0371 2.43646 40.5714 3.7264 40.5714 5.07143V30.4286H65.9286C67.2736 30.4286 68.5635 30.9629 69.5146 31.914C70.4657 32.865 71 34.155 71 35.5C71 36.845 70.4657 38.135 69.5146 39.086C68.5635 40.0371 67.2736 40.5714 65.9286 40.5714Z" fill="currentColor"/>
            </svg>
            </div>
        </a>
         </div>
        

        <!-- Dynamic Cards -->
     @foreach ($peminjaman as $p)
         <a href="{{ route('peminjaman.show', $p->id_peminjaman) }}" class="block w-full">
          <div class="bg-gray-100 hover:bg-gray-200 shadow rounded-lg p-4 flex flex-col justify-between min-h-[240px]">
              <div class="flex items-center mb-4">
               <div class="p-4 rounded-full mx-2" style="background-color: #5867E8; transform: translateY(5px);">
                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 3.51562C0 2.58322 0.370395 1.68901 1.0297 1.0297C1.68901 0.370395 2.58322 0 3.51562 0H21.4844C22.4168 0 23.311 0.370395 23.9703 1.0297C24.6296 1.68901 25 2.58322 25 3.51562V16.7969C25 17.7293 24.6296 18.6235 23.9703 19.2828C23.311 19.9421 22.4168 20.3125 21.4844 20.3125H16.6328C16.9379 21.3349 17.5353 22.2457 18.3516 22.9328C18.5352 23.0879 18.6667 23.2956 18.7282 23.5279C18.7898 23.7602 18.7784 24.0058 18.6957 24.2315C18.613 24.4571 18.4629 24.6519 18.2658 24.7893C18.0687 24.9268 17.8341 25.0003 17.5938 25H7.40625C7.16606 25 6.93167 24.9263 6.7348 24.7887C6.53793 24.6511 6.38809 24.4563 6.30557 24.2307C6.22305 24.0052 6.21184 23.7597 6.27344 23.5275C6.33505 23.2954 6.4665 23.0878 6.65 22.9328C7.46568 22.2455 8.06257 21.3347 8.36719 20.3125H3.51562C2.58322 20.3125 1.68901 19.9421 1.0297 19.2828C0.370395 18.6235 0 17.7293 0 16.7969V3.51562ZM2.34375 3.51562C2.34375 3.20482 2.46721 2.90675 2.68698 2.68698C2.90675 2.46721 3.20482 2.34375 3.51562 2.34375H21.4844C21.7952 2.34375 22.0932 2.46721 22.313 2.68698C22.5328 2.90675 22.6562 3.20482 22.6562 3.51562V15.2344C22.6562 15.5452 22.5328 15.8432 22.313 16.063C22.0932 16.2828 21.7952 16.4062 21.4844 16.4062H3.51562C3.20482 16.4062 2.90675 16.2828 2.68698 16.063C2.46721 15.8432 2.34375 15.5452 2.34375 15.2344V3.51562Z" fill="#EFF0F2"/>
                </svg>
               </div>
              </div>
              <h3 class="text-3xl font-bold ml-1 truncate">{{ $p->kelas->nama_kelas }}</h3>
              <div class="flex flex-col space-y-1 text-sm">
               <p class="text-gray-700 truncate"><strong>Guru pembimbing:</strong> {{ $p->guru_pembimbing }}</p>
               <p class="text-gray-700 truncate"><strong>Materi praktik:</strong> {{ $p->materi_praktik }}</p>
               <p class="text-gray-700 truncate"><strong>Jam ke- :</strong> {{ $p->jam_mulai }} s/d {{ $p->jam_selesai }}</p>
              </div>
          </div>
         </a>
     @endforeach
    </div>
</main>

<!-- Modal -->
<div id="modal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 flex justify-center items-center z-50">
    <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md relative">
        <button id="closeModal" class="absolute top-4 right-4 text-gray-800 text-4xl font-semibold">&times;</button>

        <h2 class="text-xl font-bold mb-6 text-gray-800">Lorem ipsum dolor</h2>

        <!-- Modal Form -->
        <form id="modalForm" action="{{ route('peminjaman.store') }}" method="POST" class="space-y-4">
            @csrf
            <div class="w-1/2">
                <label for="kelas" class="block text-sm font-medium text-gray-700 mb-1">Kelas</label>
                <select name="id_kelas" id="kelas" required class="w-full border border-gray-300 rounded-lg p-2 bg-gray-100">
                    <option value="" disabled selected>Pilih kelas</option>
                    @foreach ($kelas as $k)
                        <option value="{{ $k->id_kelas }}">{{ $k->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="guru_pembimbing" class="block text-sm font-medium text-gray-700 mb-1">Guru Pembimbing</label>
                <input type="text" name="guru_pembimbing" id="guru_pembimbing" placeholder="Masukkan Nama Guru" required class="w-full border border-gray-300 rounded-lg p-2 bg-gray-100">
            </div>

            <div>
                <label for="materi_praktik" class="block text-sm font-medium text-gray-700 mb-1">Materi Praktik</label>
                <input type="text" name="materi_praktik" id="materi_praktik" placeholder="Contoh: Debian" required class="w-full border border-gray-300 rounded-lg p-2 bg-gray-100">
            </div>

            <p class="text-md font-medium text-gray-700 mb-1">Jam</p>
            <div class="flex items-center space-x-1">
                <!-- Jam Mulai -->
                <div class="relative">
                    <input type="number" name="jam_mulai" id="jam_mulai" value="" class="border border-gray-300 rounded-md px-3 py-2 w-14 text-center text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-gray-100 hover:bg-blue-100">
                </div>

                <span class="text-gray-600 font-lg">Sampai</span>

                <!-- Jam Selesai -->
                <div class="relative">
                    <input type="number" name="jam_selesai" id="jam_selesai" value="" class="border border-gray-300 rounded-md px-3 py-2 w-14 text-center text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-gray-100">
                </div>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-blue-800 text-white px-4 py-2 rounded-lg hover:bg-blue-900">Simpan</button>
            </div>
        </form>
    </div>
</div>

<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('toastr/toastr.min.js') }}"></script>
<script>
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "timeOut": "2000",
        "extendedTimeOut": "1000",
        "showDuration": "300",
        "hideDuration": "1000"
    };
</script>

<script>
     // Display Toastr Notifications if they exist in the session
     @if (session()->has('success'))
        toastr.success("{{ session('success') }}");
    @elseif (session()->has('error'))
        toastr.error("{{ session('error') }}");
    @elseif (session()->has('info'))
        toastr.info("{{ session('info') }}");
    @endif

    // Modal functionality
    const openModal = document.getElementById('openModal');
    const modal = document.getElementById('modal');
    const closeModal = document.getElementById('closeModal');

    openModal.addEventListener('click', function (e) {
        e.preventDefault();
        modal.classList.remove('hidden');
    });

    closeModal.addEventListener('click', function (e) {
        e.preventDefault();
        modal.classList.add('hidden');
    });

    window.addEventListener('click', function (e) {
        if (e.target === modal) {
            modal.classList.add('hidden');
        }
    });

    // Submit form with AJAX
    $('#modalForm').submit(function (e) {
        e.preventDefault(); // Hentikan pengiriman form biasa

        var formData = $(this).serialize(); // Ambil data form

        $.ajax({
            url: $(this).attr('action'), // URL route store
            type: 'POST',
            data: formData,
            success: function(response) {
                if (response.success) {
                    // Tutup modal dan reset form
                    $('#modal').addClass('hidden');
                    $('#modalForm')[0].reset();

                    toastr.success(response.message); // Tampilkan pesan sukses

                    // Tambahkan data baru ke halaman
                    var newCard = `
                        <a href="/peminjaman/${response.data.id_peminjaman}">
                            <div class="bg-gray-100 hover:bg-gray-200 shadow rounded-lg p-4 w-full h-60 flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center mb-4">
                                        <div class="p-4 rounded-full mx-2" style="background-color: #5867E8; transform: translateY(5px);">
                                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 3.51562C0 2.58322 0.370395 1.68901 1.0297 1.0297C1.68901 0.370395 2.58322 0 3.51562 0H21.4844C22.4168 0 23.311 0.370395 23.9703 1.0297C24.6296 1.68901 25 2.58322 25 3.51562V16.7969C25 17.7293 24.6296 18.6235 23.9703 19.2828C23.311 19.9421 22.4168 20.3125 21.4844 20.3125H16.6328C16.9379 21.3349 17.5353 22.2457 18.3516 22.9328C18.5352 23.0879 18.6667 23.2956 18.7282 23.5279C18.7898 23.7602 18.7784 24.0058 18.6957 24.2315C18.613 24.4571 18.4629 24.6519 18.2658 24.7893C18.0687 24.9268 17.8341 25.0003 17.5938 25H7.40625C7.16606 25 6.93167 24.9263 6.7348 24.7887C6.53793 24.6511 6.38809 24.4563 6.30557 24.2307C6.22305 24.0052 6.21184 23.7597 6.27344 23.5275C6.33505 23.2954 6.4665 23.0878 6.65 22.9328C7.46568 22.2455 8.06257 21.3347 8.36719 20.3125H3.51562C2.58322 20.3125 1.68901 19.9421 1.0297 19.2828C0.370395 18.6235 0 17.7293 0 16.7969V3.51562ZM2.34375 3.51562C2.34375 3.20482 2.46721 2.90675 2.68698 2.68698C2.90675 2.46721 3.20482 2.34375 3.51562 2.34375H21.4844C21.7952 2.34375 22.0932 2.46721 22.313 2.68698C22.5328 2.90675 22.6562 3.20482 22.6562 3.51562V15.2344C22.6562 15.5452 22.5328 15.8432 22.313 16.063C22.0932 16.2828 21.7952 16.4062 21.4844 16.4062H3.51562C3.20482 16.4062 2.90675 16.2828 2.68698 16.063C2.46721 15.8432 2.34375 15.5452 2.34375 15.2344V3.51562Z" fill="#EFF0F2"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="text-3xl font-bold ml-1 truncate">${response.data.kelas.nama_kelas}</h3>
                                <div class="flex flex-col space-y-1 text-sm">
                                    <p class="text-gray-700"><strong>Guru pembimbing:</strong> ${response.data.guru_pembimbing}</p>
                                    <p class="text-gray-700"><strong>Materi praktik:</strong> ${response.data.materi_praktik}</p>
                                    <p class="text-gray-700"><strong>Jam ke- :</strong> ${response.data.jam_mulai} s/d ${response.data.jam_selesai}</p>
                                </div>
                            </div>
                        </a>
                    `;
                    // Tambahkan kartu baru setelah elemen "Add Card"
                    $('#openModal').parent().after(newCard);
                } else {
                    toastr.error('Terjadi kesalahan!');
                }
            },
            error: function(xhr) {
                var errors = xhr.responseJSON.errors;
                if (errors) {
                    for (const key in errors) {
                        toastr.error(errors[key][0]);
                    }
                } else {
                    toastr.error('Terjadi kesalahan dalam mengirim data');
                }
            }
        });
    });
    
    </script>

    <script>
    //       document.getElementById('searchForm').addEventListener('submit', function(event) {
    //     var searchInput = document.getElementById('searchInput');
    //     setTimeout(function() {
    //         searchInput.value = ''; // Kosongkan input pencarian setelah submit
    //     }, 0); // Mengosongkan input setelah form dikirim
    // });

    // document.getElementById('searchInput').addEventListener('focus', function(event) {
    //     event.target.value = ''; // Kosongkan input pencarian ketika kolom teks diklik
    // });

    // document.addEventListener('DOMContentLoaded', function() {
    //     var searchInput = document.getElementById('searchInput');
    //     searchInput.value = ''; // Kosongkan input pencarian setelah halaman di refresh
    // });
    </script>

</body>
</html>
