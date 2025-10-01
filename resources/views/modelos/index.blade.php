<x-layouts.main>
    <section class="max-w-7xl mx-auto px-4 py-12">
        <h2 class="text-4xl font-bold text-center text-[#2a2185] uppercase tracking-wide mb-12">
            Modelos ÉCLAT
        </h2>

        {{-- Grid estilo Pinterest --}}
        <div class="grid grid-cols-4 gap-6">
            @foreach($modelos as $model)
                <div class="mb-6 break-inside-avoid group relative overflow-hidden shadow-xl shadow-black/40 bg-white">

                    {{-- Imagem --}}
                    <img src="{{ $model->image }}"
                         alt="{{ $model->name }}"
                         class="w-full h-auto object-cover transition-transform duration-500 group-hover:scale-105">

                    {{-- Overlay --}}
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition duration-500 flex flex-col justify-end p-6">
                        <h3 class="text-xl font-light text-white">{{ $model->name }}</h3>
                        <span class="text-xl font-light text-white">{{ $model->altura }}</span>
                        <span class="text-xl font-light text-white">{{ $model->ojos }}</span>
                        <span class="text-xl font-light text-white">{{ $model->cabello }}</span>
                        <span class="text-xl font-light text-white">{{ $model->ubicacion }}</span>
                        <a href="{{ route('modelos.show', $model->id) }}"
                           class="mt-4 inline-block px-4 py-2 rounded-lg text-white font-semibold hover:border-b-2 hover:border-black transition">
                            Ver Perfil
                        </a>
                    </div>

                </div>
            @endforeach
        </div>
    </section>
</x-layouts.main>
