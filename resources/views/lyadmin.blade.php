<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
   <title>Document</title>
   @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <div class="flex flex-col min-h-screen">

        <!-- nav -->
        <nav class="bg-gray-200 h-12 flex items-center px-4">
            <p class="text-black font-semibold"></p>
        </nav>
        <!-- end nav -->

        <!-- sidebar -->
        <aside class="group fixed bg-gray-200 text-gray min-h-screen transition-all duration-300 hover:w-64 w-16 ">
         <div class="h-full px-2 py-4">
            <a class="flex items-center ps-2.5 mb-5">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Flag_of_the_NSDAP_%281920%E2%80%931945%2C_1-1%29.svg/600px-Flag_of_the_NSDAP_%281920%E2%80%931945%2C_1-1%29.svg.png" class="h-6 me-3 sm:h-7" alt="Admin Logo" />
                <span class="self-center text-xs font-semibold group-hover:text-xl ms-2 ml-2 overflow-hidden opacity-0 group-hover:opacity-100 transition-opacity duration-300">Admin JMK</span>
             </a>

         <hr class="border-gray-600 mb-2" />

         <div class="group">
            <nav class="px-2">
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('admin.management') }}" class="flex items-center p-2 text-gray-900 content-center rounded-lg hover:text-white hover:bg-blue-600 group transform transition duration-300 ease-in-out hover:scale-100 hover:translate-x-1">
                        <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="gray" viewBox="0 0 18 20">
                           <path d="M11.5 17.4062V15.4656C11.5 15.3698 11.516 15.282 11.5479 15.2021C11.5799 15.1222 11.6357 15.0424 11.7156 14.9625L16.7948 9.90729C16.9385 9.76354 17.0982 9.65971 17.274 9.59583C17.4497 9.53196 17.6253 9.5 17.801 9.5C17.9927 9.5 18.1764 9.53594 18.3521 9.60781C18.5278 9.67969 18.6875 9.7875 18.8313 9.93125L19.7177 10.8177C19.8615 10.9615 19.9653 11.1212 20.0292 11.2969C20.093 11.4726 20.125 11.6482 20.125 11.824C20.125 11.9997 20.0891 12.1794 20.0172 12.363C19.9453 12.5467 19.8375 12.7104 19.6938 12.8542L14.6625 17.9094C14.5826 17.9893 14.5028 18.0451 14.4229 18.0771C14.343 18.109 14.2552 18.125 14.1594 18.125H12.2188C12.0111 18.125 11.8394 18.0571 11.7036 17.9214C11.5679 17.7856 11.5 17.6139 11.5 17.4062ZM17.801 12.7583L18.6875 11.824L17.801 10.9375L16.8906 11.8479L17.801 12.7583ZM1.4375 16.2083C1.05417 16.2083 0.71875 16.0646 0.43125 15.7771C0.14375 15.4896 0 15.1542 0 14.7708V2.3125C0 1.92917 0.14375 1.59375 0.43125 1.30625C0.71875 1.01875 1.05417 0.875 1.4375 0.875H7.57083C7.7625 0.875 7.95019 0.914929 8.13385 0.994792C8.31752 1.07465 8.47325 1.17847 8.60104 1.30625L9.60729 2.3125H17.7292C18.1125 2.3125 18.4479 2.45625 18.7354 2.74375C19.0229 3.03125 19.1667 3.36667 19.1667 3.75V7.4875C19.1667 7.71113 19.0788 7.88281 18.9031 8.0026C18.7274 8.1224 18.5278 8.15833 18.3042 8.11042C18.2083 8.09446 18.1125 8.08248 18.0167 8.07448C17.9208 8.06648 17.825 8.0625 17.7292 8.0625C17.3778 8.07846 17.0344 8.15436 16.699 8.2901C16.3635 8.42585 16.0601 8.6295 15.7885 8.90104L10.4937 14.1479C10.366 14.2757 10.2622 14.4314 10.1823 14.6151C10.1024 14.7988 10.0625 14.9865 10.0625 15.1781V15.4896C10.0625 15.6972 9.9946 15.8689 9.85885 16.0047C9.72311 16.1404 9.55137 16.2083 9.34375 16.2083H1.4375Z" fill="#9D9B9B"/>
                        </svg>
                        <span class="ms-2 ml-4 text-xs group-hover:text-base overflow-hidden opacity-0 group-hover:opacity-100 transition-opacity duration-300">Management Barang</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.kategori') }}" class="flex items-center p-2 text-gray-900 content-center rounded-lg hover:text-white hover:bg-blue-600 group transform transition duration-300 ease-in-out hover:scale-100 hover:translate-x-1">
                            <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="gray" viewBox="0 0 18 20">
                                <path d="M0.675 7.50005C0.495 7.50005 0.3375 7.43068 0.2025 7.29192C0.0675 7.15317 0 6.99756 0 6.82505V0.975049C0 0.802541 0.0675 0.646925 0.2025 0.508174C0.3375 0.369423 0.495 0.300049 0.675 0.300049H3.83625L4.51125 0.975049H8.325C8.49751 0.975049 8.65312 1.04442 8.79187 1.18317C8.93063 1.32193 9 1.47754 9 1.65005V6.82505C9 6.99756 8.93063 7.15317 8.79187 7.29192C8.65312 7.43068 8.49751 7.50005 8.325 7.50005H0.675Z" fill="#9D9B9B"/>
                                <path d="M11.675 7.50005C11.495 7.50005 11.3375 7.43068 11.2025 7.29192C11.0675 7.15317 11 6.99756 11 6.82505V0.975049C11 0.802541 11.0675 0.646925 11.2025 0.508174C11.3375 0.369423 11.495 0.300049 11.675 0.300049H14.8362L15.5112 0.975049H19.325C19.4975 0.975049 19.6531 1.04442 19.7919 1.18317C19.9306 1.32193 20 1.47754 20 1.65005V6.82505C20 6.99756 19.9306 7.15317 19.7919 7.29192C19.6531 7.43068 19.4975 7.50005 19.325 7.50005H11.675Z" fill="#9D9B9B"/>
                                <path d="M0.675 16.7C0.495 16.7 0.3375 16.6306 0.2025 16.4919C0.0675 16.3531 0 16.1975 0 16.025V10.175C0 10.0025 0.0675 9.84688 0.2025 9.70813C0.3375 9.56937 0.495 9.5 0.675 9.5H3.83625L4.51125 10.175H8.325C8.49751 10.175 8.65312 10.2444 8.79187 10.3831C8.93063 10.5219 9 10.6775 9 10.85V16.025C9 16.1975 8.93063 16.3531 8.79187 16.4919C8.65312 16.6306 8.49751 16.7 8.325 16.7H0.675Z" fill="#9D9B9B"/>
                                <path d="M11.675 16.7C11.495 16.7 11.3375 16.6306 11.2025 16.4919C11.0675 16.3531 11 16.1975 11 16.025V10.175C11 10.0025 11.0675 9.84688 11.2025 9.70813C11.3375 9.56937 11.495 9.5 11.675 9.5H14.8362L15.5112 10.175H19.325C19.4975 10.175 19.6531 10.2444 19.7919 10.3831C19.9306 10.5219 20 10.6775 20 10.85V16.025C20 16.1975 19.9306 16.3531 19.7919 16.4919C19.6531 16.6306 19.4975 16.7 19.325 16.7H11.675Z" fill="#9D9B9B"/>
                            </svg>
                            <span class="ms-3 ml-4 text-xs group-hover:text-base overflow-hidden opacity-0 group-hover:opacity-100 transition-opacity duration-300">Kategori</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.management') }}" class="flex items-center p-2 text-gray-900 content-center rounded-lg hover:text-white hover:bg-blue-600 group transform transition duration-300 ease-in-out hover:scale-100 hover:translate-x-1">
                            <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="gray" viewBox="0 0 18 20">
                                <path d="M1.4375 19.1667C1.0382 19.1667 0.698783 19.0269 0.419271 18.7474C0.139758 18.4679 0 18.1285 0 17.7292V3.35417C0 2.95486 0.139758 2.61545 0.419271 2.33594C0.698783 2.05643 1.0382 1.91667 1.4375 1.91667H6.34896C6.42883 1.35764 6.68438 0.898438 7.11563 0.539063C7.54688 0.179688 8.05 0 8.625 0C9.2 0 9.70312 0.179688 10.1344 0.539063C10.5656 0.898438 10.8212 1.35764 10.901 1.91667H15.8125C16.2118 1.91667 16.5512 2.05643 16.8307 2.33594C17.1102 2.61545 17.25 2.95486 17.25 3.35417V17.7292C17.25 18.1285 17.1102 18.4679 16.8307 18.7474C16.5512 19.0269 16.2118 19.1667 15.8125 19.1667H1.4375ZM3.83333 15.3333H10.374V13.8958H3.83333V15.3333ZM3.83333 11.2604H13.4167V9.82292H3.83333V11.2604ZM3.83333 7.1875H13.4167V5.75H3.83333V7.1875ZM8.625 2.94688C8.84863 2.94688 9.04427 2.86302 9.21198 2.69531C9.37969 2.5276 9.46354 2.33195 9.46354 2.10833C9.46354 1.88472 9.37969 1.68906 9.21198 1.52135C9.04427 1.35365 8.84863 1.26979 8.625 1.26979C8.40137 1.26979 8.20573 1.35365 8.03802 1.52135C7.87031 1.68906 7.78646 1.88472 7.78646 2.10833C7.78646 2.33195 7.87031 2.5276 8.03802 2.69531C8.20573 2.86302 8.40137 2.94688 8.625 2.94688Z" fill="#9D9B9B"/>
                            </svg>
                            <span class="ms-3 ml-4 text-xs group-hover:text-base overflow-hidden opacity-0 group-hover:opacity-100 transition-opacity duration-300">Detail Peminjaman</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.management') }}" class="flex items-center p-2 text-gray-900 content-center rounded-lg hover:text-white hover:bg-blue-600 group transform transition duration-300 ease-in-out hover:scale-100 hover:translate-x-1">
                        <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="gray" viewBox="0 0 18 20">
                           <path d="M17.8277 18.5557L18.5618 17.8198L16.5955 15.8486V12.9049H15.5468V16.2691L17.8277 18.5557ZM16.0712 21C14.7079 21 13.5456 20.5138 12.5843 19.5413C11.623 18.5688 11.1423 17.4168 11.1423 16.0851C11.1423 14.7184 11.623 13.5488 12.5843 12.5763C13.5456 11.6039 14.7079 11.1176 16.0712 11.1176C17.417 11.1176 18.5749 11.6039 19.5449 12.5763C20.515 13.5488 21 14.7184 21 16.0851C21 17.4168 20.515 18.5688 19.5449 19.5413C18.5749 20.5138 17.417 21 16.0712 21ZM4.19476 5.78223H14.6816V4.20526H4.19476V5.78223ZM10.2247 18.9237H1.57303C1.13608 18.9237 0.764667 18.7703 0.458801 18.4637C0.152936 18.1571 0 17.7847 0 17.3467V1.57697C0 1.13893 0.152936 0.766581 0.458801 0.45995C0.764667 0.153318 1.13608 0 1.57303 0H17.3034C17.7403 0 18.1118 0.153318 18.4176 0.45995C18.7235 0.766581 18.8764 1.13893 18.8764 1.57697V10.224C18.4395 9.99626 17.985 9.82979 17.5131 9.72466C17.0412 9.61952 16.5605 9.56696 16.0712 9.56696C15.8265 9.56696 15.5905 9.5801 15.3633 9.60638C15.1361 9.63267 14.9088 9.67209 14.6816 9.72466V8.67334H4.19476V10.2503H13.2135C12.5843 10.5657 12.0206 10.9731 11.5225 11.4725C11.0243 11.9718 10.618 12.5281 10.3034 13.1414H4.19476V14.7184H9.72659C9.67416 14.9462 9.63483 15.174 9.60861 15.4018C9.5824 15.6295 9.56929 15.8661 9.56929 16.1114C9.56929 16.6195 9.62172 17.1014 9.72659 17.5569C9.83146 18.0125 9.99752 18.4681 10.2247 18.9237Z" fill="#9D9B9B"/>
                        </svg>
                        <span class="ms-3 ml-4 text-xs group-hover:text-base overflow-hidden opacity-0 group-hover:opacity-100 transition-opacity duration-300">Riwayat Barang</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>
        </div>
        <!-- end sidebar -->

        <div class="flex-1 ml-16">
        <div class="fixed inset-0 bg-black opacity-0 pointer-events-none transition-opacity duration-300 group-hover:opacity-70"></div>

        <!-- content -->
        <main class="fixed-1 p-8 pt-10 transition-all">
                @yield('crud')
        </main>
        <!-- end content -->
    </div>
</body>
</html>