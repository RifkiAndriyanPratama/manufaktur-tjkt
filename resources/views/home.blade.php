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
        <a href="{{ Auth::check() ? route('admin.management') : route('login') }}">
            <svg width="100" height="35" viewBox="0 0 364 128" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M309.263 115.032C309.263 113.928 310.158 113.032 311.263 113.032H311.631C328 112.5 327 97.5 323 88L299.832 36.1034C299.241 34.7805 300.209 33.2881 301.658 33.2881H316.625C317.404 33.2881 318.112 33.7409 318.44 34.4483L331.42 62.5051C332.176 64.1379 334.535 64.021 335.125 62.3215L343.119 39.3041C344.013 36.5193 344.328 35.5363 344.575 34.7256C344.833 33.8755 345.611 33.2881 346.499 33.2881H360.361C361.712 33.2881 362.674 34.5999 362.269 35.8885L338 113C332 126 324.5 127.012 314.063 127.012C312.784 127.012 311.895 127.012 311.261 127.012C310.156 127.012 309.263 126.117 309.263 125.012V115.032Z" fill="#DCF2F1"/>
                <path d="M291.381 48.0562C291.381 49.1607 290.485 50.0562 289.38 50.0562C287.551 50.0562 286.452 50.0562 282.933 50.0562H282.629C281.524 50.0562 280.629 50.9516 280.629 52.0562V99.0002C280.629 100.105 279.734 101 278.629 101H265.605C264.5 101 263.605 100.105 263.605 99.0002V31.4962C262.965 18.5682 270.517 13.4482 283.189 13.4482C285.332 13.4482 287.434 13.4756 289.337 13.4706C290.459 13.4676 291.381 14.3706 291.381 15.4922V26.0402C291.381 27.1447 290.486 28.0402 289.381 28.0402H286.901C282.933 28.0402 280.757 29.7042 280.373 33.0322V35.5122C280.373 36.6167 281.268 37.5122 282.373 37.5122H289.381C290.486 37.5122 291.381 38.4076 291.381 39.5122V48.0562Z" fill="#DCF2F1"/>
                <path d="M255 9V2C255 0.895431 255.895 0 257 0H264C265.105 0 266 0.895431 266 2V9C266 10.1046 265.105 11 264 11H257C255.895 11 255 10.1046 255 9Z" fill="#21CEFA"/>
                <path d="M236.98 13.5001C236.98 12.3955 237.875 11.5001 238.98 11.5001H245.812C250.347 11.5001 249.97 11.5 252.002 11.5C253.107 11.5001 254.004 12.3955 254.004 13.5V25.2721C254.004 26.3767 253.109 27.2721 252.004 27.2721H238.98C237.875 27.2721 236.98 26.3767 236.98 25.2721V13.5001ZM236.98 35.2881C236.98 34.1836 237.875 33.2881 238.98 33.2881H245.812C249.999 33.2881 250.414 33.2881 252.003 33.2881C253.107 33.2881 254.004 34.1836 254.004 35.2881V99.0002C254.004 100.105 253.109 101 252.004 101H238.98C237.875 101 236.98 100.105 236.98 99.0002V35.2881Z" fill="#21CEFA"/>
                <path d="M248 12C248 12 251.5 12.3333 253.5 10C255.5 7.66667 255.5 5 255.5 5" stroke="#21CEFA"/>
                <path d="M261.5 10.5C261.5 10.5 257.5 10.5 255.5 12.5C253.5 14.5 253.5 17 253.5 17" stroke="#21CEFA"/>
                <path d="M253.5 14L252 12L255.5 8L258 10L253.5 14Z" fill="#21CEFA"/>
                <path d="M198.087 56.5001C188.871 56.5001 183 63.5001 183 71.0001C183 78.0002 187.5 87.5602 197.831 87.5602C209 87.5602 212.5 78.5002 212.5 71.0001C212.5 63.5001 207.303 56.5001 198.087 56.5001ZM220.871 13.9601C224.232 13.9601 225.685 13.9601 227.319 13.9601C228.423 13.9601 229.319 14.8555 229.319 15.9601V71.6881C229.319 92.0401 218.695 102.152 197.575 102.024C176.583 101.64 166 89.8122 166 72.5001C166 62.8122 168.5 57.0884 175.5 50.5001C183.173 43.2789 199.986 41.6401 208.758 44.5727C210.361 45.1085 212.494 43.9542 212.49 42.2643L212.428 15.9649C212.425 14.8585 213.321 13.9601 214.428 13.9601H220.871Z" fill="#DCF2F1"/>
                <path d="M159.208 99.0002C159.208 100.105 158.313 101 157.208 101H150.504C146.852 101 145.623 101 144.479 101C143.383 101 142.491 100.117 142.48 99.0207L142.056 57.7362C141.672 50.6962 137.832 47.2402 130.28 47.2402C122.728 47.2402 118.888 50.6962 118.76 57.7362V99.0002C118.76 100.105 117.865 101 116.76 101H103.48C102.375 101 101.48 100.105 101.48 99.0002V61.1922C101.48 41.8642 111.208 32.2642 130.536 32.2642C149.864 32.2642 159.336 41.8642 159.208 61.1922V99.0002Z" fill="#DCF2F1"/>
                <path d="M89.9222 80.2642C91.2303 80.2642 92.1882 81.5019 91.7871 82.7469C87.6748 95.5135 78.5912 102.536 62.938 102.536C42.458 101.896 32.218 89.9922 32.218 66.9522C32.218 43.9122 42.586 32.3922 63.194 32.2642C84.1746 32.2642 94.311 44.8141 93.6032 70.0329C93.5733 71.0996 92.6914 71.9442 91.6243 71.9442H51.8813C50.7282 71.9442 49.8068 72.9205 49.9472 74.065C51.0462 83.0275 55.4618 87.5602 63.194 87.5602C67.162 87.5602 71.2071 86.2098 74.202 82.6962C76.5 80.0002 77 80.2642 79.962 80.2642H89.9222ZM62.938 46.2162C56.2859 46.2162 52.0811 50.0468 50.4206 57.5139C50.1564 58.702 51.0989 59.7842 52.316 59.7842H73.2404C74.435 59.7842 75.3713 58.7394 75.1464 57.5663C73.7077 50.0647 69.6057 46.2162 62.938 46.2162Z" fill="#DCF2F1"/>
                <path d="M0.5 16.6252C0.5 15.2085 1.20833 14.5002 2.625 14.5002H14.6875C16.0625 14.5002 16.75 15.2085 16.75 16.6252V81.3752C16.75 83.1252 17.1875 84.4793 18.0625 85.4377C18.9375 86.3543 20.5208 86.8127 22.8125 86.8127H23.9375C24.3958 86.8127 24.75 86.896 25 87.0627C25.2917 87.2293 25.5 87.4377 25.625 87.6877C25.75 87.896 25.8125 88.146 25.8125 88.4377C25.8542 88.6877 25.875 88.9168 25.875 89.1252V99.0002C25.875 99.2085 25.8542 99.4377 25.8125 99.6877C25.7708 99.9377 25.625 100.167 25.375 100.375C25.1667 100.542 24.8125 100.688 24.3125 100.813C23.8542 100.938 23.1875 101 22.3125 101H18.3125C15.8542 101 13.5417 100.708 11.375 100.125C9.20833 99.5418 7.3125 98.5418 5.6875 97.1252C4.10417 95.7085 2.83333 93.8127 1.875 91.4377C0.958333 89.021 0.5 85.9793 0.5 82.3127V16.6252Z" fill="#DCF2F1"/>
            </svg>
        </a>
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
                <select name="id_kelas" id="kelas" required class="w-full border border-gray-300 rounded-lg p-2 bg-gray-100 text-gray-500">
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
