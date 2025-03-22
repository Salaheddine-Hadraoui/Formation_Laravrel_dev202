<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" 
  style="background-color: #000000;
opacity: 1;
background-image:  linear-gradient(#444cf7 4px, transparent 4px), linear-gradient(to right, #444cf7 4px, #000000 4px);
background-size: 80px 80px;
color:white">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Project</title>
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
          @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    </head>
    <body>
    <main class="bg-black w-fit mx-auto">
      @yield('content')
    </main>
  </body>
</html>