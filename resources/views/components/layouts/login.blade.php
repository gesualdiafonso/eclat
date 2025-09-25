<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <title>ÉCLAT</title>
</head>
<body class="bg-gray-100 h-screen">
    <main class="max-w-7xl px-2 mx-auto">
        {{ $slot }}
    </main>
    <x-footer.main></x-footer.main>
</html>