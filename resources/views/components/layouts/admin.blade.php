<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
    <title>Admin Éclat </title>
</head>
<body class="bg-gray-100 h-screen">
    <x-header.admin></x-header.admin>
    <main class="px-2 mx-auto">
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <form action="{{ route('admin.search') }}" method="GET">
                        <label>
                            <input
                                type="text"
                                name="q"
                                placeholder="Pesquisas acá"
                                class="border px-3 py-2 rounded w-full"
                            >
                            <ion-icon name="search-outline"></ion-icon>
                        </label>
                    </form>
                </div>
            </div>
            {{ $slot }}
        </div>
    </main>
    {{-- <x-footer.admin></x-footer.admin> --}}

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="{{ asset('assets/js/adminNavScripts.js') }}"></script>
</body>
</html>