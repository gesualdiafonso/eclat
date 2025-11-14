<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Token necessário para AJAX --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <title>{{ $title ?? 'Éclat Agency'}}</title>
</head>
<body class="bg-gray-100">

    <x-header.main></x-header.main>

    @include('partials.shortlist-panel')
    <main class="">
        {{ $slot }}
    </main>
    <x-footer.main></x-footer.main>

    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/CustomEase.min.js"></script>

    <script src="{{ asset('assets/js/navScript.js') }}"></script>

    @stack('scripts')

</body>
</html>