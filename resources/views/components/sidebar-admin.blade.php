<link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
<!-- sidebar -->
<aside id="logo-sidebar" class="fixed top-0 left-0 w-64 h-screen pt-14 transition-transform -translate-x-full bg-gray-200 border-r border-gray-200 sm:translate-x-0" aria-label="Sidebar">
   <div class="h-full px-0 pb-4 overflow-y-auto bg-gray-200">
      <!-- logo -->
      <div class="fixed px-3 top-3">
         <a href="https://flowbite.com" class="flex ms-2 md:me-24">
           <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d4/Flag_of_the_NSDAP_%281920%E2%80%931945%2C_1-1%29.svg/600px-Flag_of_the_NSDAP_%281920%E2%80%931945%2C_1-1%29.svg.png" class="h-8 me-3" alt="FlowBite Logo" />
           <span class="self-center text-2xl whitespace-nowrap font-[Viga]">Admin Lendify</span>
         </a>
      </div>
   <div class="px-3">
   <hr class="border-gray-600 mb-2 flex-shrink-0" />
   </div>
      <ul class="space-y-2 font-medium">
      <div class="pr-4">
         <li>
            <a href="{{ route('admin.management') }}" class="flex items-center pl-3 p-2 text-gray-900 rounded-r-lg hover:text-white hover:bg-blue-800 group relative transition-all duration-300 {{ Request::is('admin') ? 'bg-blue-800 text-white' : '' }}">
            <span class="absolute inset-y-0 left-0 w-1 bg-blue-800 rounded-r-lg transition-transform duration-300 transform -translate-x-full group-hover:translate-x-0 {{ Request::is('admin') ? 'translate-x-0' : '' }}"></span>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="gray" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect class="group-hover:stroke-white {{ Request::is('admin') ? 'stroke-white' : '' }}" x="1" y="1" width="22" height="22" rx="4" ry="4" stroke="gray" fill="none"></rect>
                <path class="group-hover:stroke-white {{ Request::is('admin') ? 'stroke-white' : '' }}" d="M4 16 L8 12 L12 14 L16 10 L20 12" stroke="gray" fill="none"/>
              </svg>
              <span class="flex-shrink-0 ml-4 text-base transition-opacity duration-300">Statistik</span>
            </a>
         </li>
      </div>
      <div class="pr-4">
        <li>
          <a href="{{ route('barang.index') }}" class="flex items-center pl-3 p-2 text-gray-900 rounded-r-lg hover:text-white hover:bg-blue-800 group relative transition-all duration-300 {{ Request::is('barang') ? 'bg-blue-800 text-white' : '' }}">
            <span class="absolute inset-y-0 left-0 w-1 bg-blue-800 rounded-r-lg transition-transform duration-300 transform -translate-x-full group-hover:translate-x-0 {{ Request::is('barang') ? 'translate-x-0' : '' }}"></span>
            <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="gray" viewBox="0 0 18 20">
              <path class="group-hover:fill-white {{ Request::is('barang') ? 'fill-white' : '' }}" d="M11.5 17.4062V15.4656C11.5 15.3698 11.516 15.282 11.5479 15.2021C11.5799 15.1222 11.6357 15.0424 11.7156 14.9625L16.7948 9.90729C16.9385 9.76354 17.0982 9.65971 17.274 9.59583C17.4497 9.53196 17.6253 9.5 17.801 9.5C17.9927 9.5 18.1764 9.53594 18.3521 9.60781C18.5278 9.67969 18.6875 9.7875 18.8313 9.93125L19.7177 10.8177C19.8615 10.9615 19.9653 11.1212 20.0292 11.2969C20.093 11.4726 20.125 11.6482 20.125 11.824C20.125 11.9997 20.0891 12.1794 20.0172 12.363C19.9453 12.5467 19.8375 12.7104 19.6938 12.8542L14.6625 17.9094C14.5826 17.9893 14.5028 18.0451 14.4229 18.0771C14.343 18.109 14.2552 18.125 14.1594 18.125H12.2188C12.0111 18.125 11.8394 18.0571 11.7036 17.9214C11.5679 17.7856 11.5 17.6139 11.5 17.4062ZM17.801 12.7583L18.6875 11.824L17.801 10.9375L16.8906 11.8479L17.801 12.7583ZM1.4375 16.2083C1.05417 16.2083 0.71875 16.0646 0.43125 15.7771C0.14375 15.4896 0 15.1542 0 14.7708V2.3125C0 1.92917 0.14375 1.59375 0.43125 1.30625C0.71875 1.01875 1.05417 0.875 1.4375 0.875H7.57083C7.7625 0.875 7.95019 0.914929 8.13385 0.994792C8.31752 1.07465 8.47325 1.17847 8.60104 1.30625L9.60729 2.3125H17.7292C18.1125 2.3125 18.4479 2.45625 18.7354 2.74375C19.0229 3.03125 19.1667 3.36667 19.1667 3.75V7.4875C19.1667 7.71113 19.0788 7.88281 18.9031 8.0026C18.7274 8.1224 18.5278 8.15833 18.3042 8.11042C18.2083 8.09446 18.1125 8.08248 18.0167 8.07448C17.9208 8.06648 17.825 8.0625 17.7292 8.0625C17.3778 8.07846 17.0344 8.15436 16.699 8.2901C16.3635 8.42585 16.0601 8.6295 15.7885 8.90104L10.4937 14.1479C10.366 14.2757 10.2622 14.4314 10.1823 14.6151C10.1024 14.7988 10.0625 14.9865 10.0625 15.1781V15.4896C10.0625 15.6972 9.9946 15.8689 9.85885 16.0047C9.72311 16.1404 9.55137 16.2083 9.34375 16.2083H1.4375Z" fill="#9D9B9B"/>
            </svg>
            <span class="flex-shrink-0 ms-2 ml-4 text-base transition-opacity duration-300">Management Barang</span>
          </a>
        </li>
      </div>
      <div class="pr-4">
         <li>
            <a href="{{ route('kategori.index') }}" class="flex items-center pl-3 p-2 text-gray-900 rounded-r-lg hover:text-white hover:scale-100 hover:bg-blue-800 group duration-300 ease-linear relative {{ Request::is('kategori') ? 'bg-blue-800 text-white' : '' }}">
            <span class="absolute inset-y-0 left-0 w-1 bg-blue-800 rounded-r-lg transition-transform duration-300 transform -translate-x-full group-hover:translate-x-0 {{ Request::is('kategori') ? 'translate-x-0' : '' }}"></span>    
               <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="gray" viewBox="0 0 18 20">
                    <path class="group-hover:fill-white {{ Request::is('kategori') ? 'fill-white' : '' }}" d="M0.675 7.50005C0.495 7.50005 0.3375 7.43068 0.2025 7.29192C0.0675 7.15317 0 6.99756 0 6.82505V0.975049C0 0.802541 0.0675 0.646925 0.2025 0.508174C0.3375 0.369423 0.495 0.300049 0.675 0.300049H3.83625L4.51125 0.975049H8.325C8.49751 0.975049 8.65312 1.04442 8.79187 1.18317C8.93063 1.32193 9 1.47754 9 1.65005V6.82505C9 6.99756 8.93063 7.15317 8.79187 7.29192C8.65312 7.43068 8.49751 7.50005 8.325 7.50005H0.675Z" fill="#9D9B9B"/>
                    <path class="group-hover:fill-white {{ Request::is('kategori') ? 'fill-white' : '' }}" d="M11.675 7.50005C11.495 7.50005 11.3375 7.43068 11.2025 7.29192C11.0675 7.15317 11 6.99756 11 6.82505V0.975049C11 0.802541 11.0675 0.646925 11.2025 0.508174C11.3375 0.369423 11.495 0.300049 11.675 0.300049H14.8362L15.5112 0.975049H19.325C19.4975 0.975049 19.6531 1.04442 19.7919 1.18317C19.9306 1.32193 20 1.47754 20 1.65005V6.82505C20 6.99756 19.9306 7.15317 19.7919 7.29192C19.6531 7.43068 19.4975 7.50005 19.325 7.50005H11.675Z" fill="#9D9B9B"/>
                    <path class="group-hover:fill-white {{ Request::is('kategori') ? 'fill-white' : '' }}" d="M0.675 16.7C0.495 16.7 0.3375 16.6306 0.2025 16.4919C0.0675 16.3531 0 16.1975 0 16.025V10.175C0 10.0025 0.0675 9.84688 0.2025 9.70813C0.3375 9.56937 0.495 9.5 0.675 9.5H3.83625L4.51125 10.175H8.325C8.49751 10.175 8.65312 10.2444 8.79187 10.3831C8.93063 10.5219 9 10.6775 9 10.85V16.025C9 16.1975 8.93063 16.3531 8.79187 16.4919C8.65312 16.6306 8.49751 16.7 8.325 16.7H0.675Z" fill="#9D9B9B"/>
                    <path class="group-hover:fill-white {{ Request::is('kategori') ? 'fill-white' : '' }}" d="M11.675 16.7C11.495 16.7 11.3375 16.6306 11.2025 16.4919C11.0675 16.3531 11 16.1975 11 16.025V10.175C11 10.0025 11.0675 9.84688 11.2025 9.70813C11.3375 9.56937 11.495 9.5 11.675 9.5H14.8362L15.5112 10.175H19.325C19.4975 10.175 19.6531 10.2444 19.7919 10.3831C19.9306 10.5219 20 10.6775 20 10.85V16.025C20 16.1975 19.9306 16.3531 19.7919 16.4919C19.6531 16.6306 19.4975 16.7 19.325 16.7H11.675Z" fill="#9D9B9B"/>
                </svg>
            <span class="flex-shrink-0 ms-2 ml-4 text-base transition-opacity duration-300">Kategori</span>
            </a>
         </li>
      </div>
      <div class="pr-4">
         <li>
            <a href="{{ route('kelas.index') }}" class="flex items-center pl-3 p-2 text-gray-900 rounded-r-lg hover:text-white hover:scale-100 hover:bg-blue-800 group duration-300 ease-linear relative {{ Request::is('kelas') ? 'bg-blue-800 text-white' : '' }}">
            <span class="absolute inset-y-0 left-0 w-1 bg-blue-800 rounded-r-lg transition-transform duration-300 transform -translate-x-full group-hover:translate-x-0 {{ Request::is('kelas') ? 'translate-x-0' : '' }}"></span>    
               <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="gray" viewBox="0 0 14 14">
                    <path class="group-hover:fill-white {{ Request::is('kelas') ? 'fill-white' : '' }}" fill-rule="evenodd" clip-rule="evenodd" d="M12.402 8.976H7.25899C7.84255 8.92403 8.38365 8.64922 8.76986 8.20867C9.15607 7.76813 9.3577 7.19572 9.33285 6.61038C9.30801 6.02504 9.0586 5.47177 8.63645 5.06554C8.21429 4.65931 7.65185 4.43134 7.06599 4.429H5.38599C5.63716 4.09127 5.8168 3.70586 5.91394 3.29634C6.01108 2.88682 6.02367 2.46179 5.95094 2.04723C5.87822 1.63268 5.7217 1.23731 5.49096 0.88531C5.26023 0.533307 4.96012 0.232064 4.60899 0L12.402 0C12.7597 0.00052992 13.1026 0.142996 13.3553 0.396112C13.608 0.649229 13.75 0.992304 13.75 1.35V7.629C13.75 8.373 13.146 8.977 12.402 8.977V8.976ZM2.89799 4.431C3.14423 4.43673 3.38912 4.39318 3.61828 4.30291C3.84745 4.21264 4.05625 4.07747 4.23242 3.90534C4.4086 3.73322 4.54859 3.52762 4.64417 3.30062C4.73974 3.07362 4.78898 2.8298 4.78898 2.5835C4.78898 2.3372 4.73974 2.09338 4.64417 1.86638C4.54859 1.63938 4.4086 1.43378 4.23242 1.26166C4.05625 1.08953 3.84745 0.954363 3.61828 0.864093C3.38912 0.773822 3.14423 0.730271 2.89799 0.736C2.41545 0.747227 1.95645 0.946804 1.61913 1.29205C1.28182 1.6373 1.09298 2.10082 1.09298 2.5835C1.09298 3.06618 1.28182 3.5297 1.61913 3.87495C1.95645 4.2202 2.41545 4.41977 2.89799 4.431ZM8.09299 6.707C8.09299 6.139 7.63299 5.679 7.06599 5.679H2.89899C2.19617 5.679 1.52213 5.9582 1.02516 6.45517C0.528188 6.95214 0.248993 7.62618 0.248993 8.329V9.534C0.248993 10.066 0.680993 10.497 1.21299 10.497H1.38499L1.66699 13.107C1.69337 13.3521 1.80931 13.5787 1.99258 13.7436C2.17584 13.9084 2.41352 13.9997 2.65999 14H3.16199C3.40323 13.9999 3.63629 13.9126 3.81823 13.7542C4.00016 13.5958 4.1187 13.3769 4.15199 13.138L4.90499 7.734H7.06499C7.63199 7.734 8.09199 7.274 8.09199 6.707H8.09299Z" fill="#9D9B9B"/>
                </svg>
            <span class="flex-shrink-0 ms-2 ml-4 text-base transition-opacity duration-300">Kelas</span>
            </a>
         </li>
      </div>
      <div class="pr-4">
         <li>
            <a href="#" class="flex items-center pl-3 p-2 text-gray-900 rounded-r-lg hover:text-white hover:scale-100 hover:bg-blue-800 group duration-300 ease-linear relative {{ Request::is('#') ? 'bg-blue-800 text-white' : '' }}">
            <span class="absolute inset-y-0 left-0 w-1 bg-blue-800 rounded-r-lg transition-transform duration-300 transform -translate-x-full group-hover:translate-x-0 {{ Request::is('#') ? 'translate-x-0' : '' }}"></span> 
               <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="gray" viewBox="0 0 20 22">
                    <path class="group-hover:fill-white {{ Request::is('#') ? 'fill-white' : '' }}" d="M17.8277 18.5557L18.5618 17.8198L16.5955 15.8486V12.9049H15.5468V16.2691L17.8277 18.5557ZM16.0712 21C14.7079 21 13.5456 20.5138 12.5843 19.5413C11.623 18.5688 11.1423 17.4168 11.1423 16.0851C11.1423 14.7184 11.623 13.5488 12.5843 12.5763C13.5456 11.6039 14.7079 11.1176 16.0712 11.1176C17.417 11.1176 18.5749 11.6039 19.5449 12.5763C20.515 13.5488 21 14.7184 21 16.0851C21 17.4168 20.515 18.5688 19.5449 19.5413C18.5749 20.5138 17.417 21 16.0712 21ZM4.19476 5.78223H14.6816V4.20526H4.19476V5.78223ZM10.2247 18.9237H1.57303C1.13608 18.9237 0.764667 18.7703 0.458801 18.4637C0.152936 18.1571 0 17.7847 0 17.3467V1.57697C0 1.13893 0.152936 0.766581 0.458801 0.45995C0.764667 0.153318 1.13608 0 1.57303 0H17.3034C17.7403 0 18.1118 0.153318 18.4176 0.45995C18.7235 0.766581 18.8764 1.13893 18.8764 1.57697V10.224C18.4395 9.99626 17.985 9.82979 17.5131 9.72466C17.0412 9.61952 16.5605 9.56696 16.0712 9.56696C15.8265 9.56696 15.5905 9.5801 15.3633 9.60638C15.1361 9.63267 14.9088 9.67209 14.6816 9.72466V8.67334H4.19476V10.2503H13.2135C12.5843 10.5657 12.0206 10.9731 11.5225 11.4725C11.0243 11.9718 10.618 12.5281 10.3034 13.1414H4.19476V14.7184H9.72659C9.67416 14.9462 9.63483 15.174 9.60861 15.4018C9.5824 15.6295 9.56929 15.8661 9.56929 16.1114C9.56929 16.6195 9.62172 17.1014 9.72659 17.5569C9.83146 18.0125 9.99752 18.4681 10.2247 18.9237Z" fill="#9D9B9B"/>
                </svg>
            <span class="flex-shrink-0 ms-2 ml-4 text-base transition-opacity duration-300">Riwayat Peminjaman</span>
            </a>
         </li>
      </div>
      <div class="fixed bottom-4 left-4 w-full">
          <button 
              onclick="document.getElementById('logoutModal').classList.remove('hidden')" 
              class="flex items-center p-2 text-gray-900 content-center rounded-lg hover:text-white text-gray-900 hover:bg-red-500 group transform transition duration-300 ease-in-out hover:scale-100 hover:translate-x-1">
              <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
              </svg>
              <span class="flex-shrink-0 ms-2 ml-4 text-base transition-opacity duration-300">Logout</span>
          </button>
      </div>
      </ul>
   </div>
</aside>
<div id="logoutModal" class="fixed z-20 inset-0 bg-gray-800 bg-opacity-50 hidden flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg w-1/3">
        <div class="border-b px-4 py-2 flex justify-between items-center rounded-t-lg bg-red-600">
            <h2 class="text-xl text-white font-bold">Konfirmasi Logout</h2>
            <button 
                onclick="document.getElementById('logoutModal').classList.add('hidden')" 
                class="text-white">&times;</button>
        </div>
        <div class="p-4">
            <p>Apakah anda yakin?</p>
            <div class="flex justify-end mt-4">
                <button 
                    onclick="document.getElementById('logoutModal').classList.add('hidden')" 
                    class="bg-blue-800 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded mr-2">Tidak</button>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-6 rounded">Ya</button>
                </form>
            </div>
        </div>
    </div>
</div>