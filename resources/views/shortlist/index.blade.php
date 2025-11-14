<x-layouts.main>
    <div class="max-w-5xl mx-auto px-6 py-16">

        <h1 class="text-4xl font-bold uppercase tracking-wide mb-10">
            Tu Shortlist
        </h1>

        <h3 class="text-xl font-semibold mb-5">Modelos Seleccionados</h3>

        <div class="flex gap-3">
            @forelse($modelo as $m)
                <div class=" mb-2 w-48 h-auto relative hover:bg-black bg-transparent hover:text-white duration-500 transition-all"">
                    <img src="{{ asset($m->image) }}" alt="{{ $m->name }}" class="w-full h-full hover:opacity-50">
                    <span class="absolute px-5 pb-5 bottom-0 w-full duration-500 transition-all">{{ $m->name }}</span>
                </div>
            @empty
                <p class="text-gray-400">No hay modelo seleccionado.</p>
            @endforelse
        </div>

        <h3 class="text-xl font-semibold mt-10 mb-5">Servicios Seleccionados</h3>

        <div class="flex gap-3">
            @forelse($servicio as $s)
                <div class=" mb-2 w-48 h-auto relative hover:bg-black bg-transparent hover:text-white duration-500 transition-all"">
                    <img src="{{ asset($s->image) }}" alt="{{ $s->name }}" class="w-full h-full hover:opacity-40">
                    <span class="absolute px-2 pb-5 bottom-0 w-full duration-500 transition-all">{{ $s->name }}</span>
                </div>
            @empty
                <p class="text-gray-400">No hay modelo seleccionado.</p>
            @endforelse
        </div>

        <form method="POST" action="{{ route('pedido.finalize') }}" class="mt-10">
            @csrf
            <button class="px-6 py-3 bg-black text-white rounded">
                Confirmar Contratación
            </button>
        </form>

    </div>
</x-layouts.main>
