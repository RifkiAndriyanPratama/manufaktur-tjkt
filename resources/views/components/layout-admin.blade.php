<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
   <link href="{{ asset('toastr/toastr.min.css') }}" rel="stylesheet">
   <title>Dashboard Admin</title>
   @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>

   <x-sidebar-admin />

   <div class="ml-64">
   <x-navbar-admin />
    <div class="flex p-10 sm:ml-0">
       <div class="w-full border-gray rounded-lg mt-10">
         <div class="">
               {{ $slot }}
         </div>
       </div>
    </div>
   </div>

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
   </script>
</body>
</html>