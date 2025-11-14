<x-layouts.main>
    <div class="max-w-5xl mx-auto px-6 py-16">

        <h1 class="text-4xl font-bold uppercase tracking-wide mb-10">
            Tu Shortlist
        </h1>

        <h3 class="text-xl font-semibold mb-5">Modelos Seleccionados</h3>

        @forelse($modelos as $m)
            <div class="border p-4 rounded mb-2">{{ $m->name }}</div>
        @empty
            <p class="text-gray-400">No hay modelo seleccionado.</p>
        @endforelse

        <h3 class="text-xl font-semibold mt-10 mb-5">Servicios Seleccionados</h3>

        @forelse($servicios as $s)
            <div class="border p-4 rounded mb-2">{{ $s->name }}</div>
        @empty
            <p class="text-gray-400">No hay servicios seleccionado.</p>
        @endforelse

        <form method="POST" action="{{ route('shortlist.finalize') }}" class="mt-10">
            @csrf
            <button class="px-6 py-3 bg-black text-white rounded">
                Confirmar Contratación
            </button>
        </form>

    </div>
</x-layouts.main>
