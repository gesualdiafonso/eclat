<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Cute Rescue</title>
</head>
<body class="bg-gray-100 h-screen">
    <x-header.admin></x-header.admin>
    <main class="flex items-center justify-center">
        {{-- Esto es un comentatio desde de Blade --}}
        {{ $slot }}
    </main>
    <x-footer.admin></x-footer.admin>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
</body>
</html>