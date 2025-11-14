<div id="shortlist-panel"
     class="fixed top-9 right-96 text-black px-6 py-3 rounded-full cursor-pointer flex items-center gap-3 z-50 transition-all duration-300 hover:scale-105 font-light">

    <a href="{{ route('shortlist.index') }}" class="flex items-center gap-2 text-decoration-none text-black hover:text-black">
        <span class="uppercase tracking-wider text-sm">Shortlist</span>
        (<span id="shortlist-count">0</span>)
    </a>
</div>

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
    // Atualiza painel no carregamento
    fetch("{{ route('shortlist.session') }}")
        .then(res => res.json())
        .then(data => {
            updatePanel(data.total);
        });

});
</script>
@endpush