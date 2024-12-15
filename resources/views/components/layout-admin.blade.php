<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
   <title>Dashboard Admin</title>
   @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
   
   <x-navbar-admin />

   <x-sidebar-admin />

   <div class="flex p-10 sm:ml-64">
      <div class="w-full border-gray rounded-lg mt-10">
        <div class="">
              {{ $slot }}
        </div>
      </div>
   </div>
</body>
</html>