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

    @include('partials.pedido-panel')
    <main class="">
        {{ $slot }}
    </main>
    <x-footer.main></x-footer.main>

    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/CustomEase.min.js"></script>

    <script src="{{ asset('assets/js/navScript.js') }}"></script>

    {{-- Script AJAX para adicionar/remover modelos/serviços e atualizar painel --}}
    @push('scripts')
<script>
document.addEventListener("DOMContentLoaded", () => {

    const updatePanel = (count) => {
        document.getElementById('shortlist-count').innerText = count;
    };

    document.querySelectorAll(".select-heart").forEach(btn => {
        btn.addEventListener("click", function () {

            const id = this.dataset.id;
            const type = this.dataset.type;

            fetch("{{ route('shortlist.toggle') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({ item_id: id, type: type })
            })
            .then(res => res.json())
            .then(data => {
                // Atualiza coração
                const icon = this.querySelector(".heart-icon");
                icon.textContent = data.selected ? "🖤" : "🤍";

                // Atualiza o painel
                updatePanel(data.total);
            });
        });
    });
});
</script>
@endpush

</body>
</html>