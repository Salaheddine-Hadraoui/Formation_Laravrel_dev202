<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" 
  style="color:white"
  class="h-screen bg-cover bg-center bg-black
  >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Project</title>
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
          @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="preload" href="{{ asset('assets-images/w-neon-yellow.png') }}" as="image">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    </head>
    <body>
    <main class="p-3 min-[750px]:w-3/4 mx-auto">
      @yield('content')
    </main>
  </body>
</html>