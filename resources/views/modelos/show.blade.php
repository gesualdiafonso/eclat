<x-layouts.main>
    <section class="flex flex-col md:flex-row gap-0 mt-3">
        <div class="w-full">
            <img src="{{ asset($modelo->image) }}"
                alt="{{ $modelo->name }}"
                class="w-full"
            >
        </div>
        <div class="w-full py-5 px-10">
            <div class="text-center my-5"><h2 class="text-5xl font-bold">{{ $modelo->name}}</h2></div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-10 my-10">
                <div class="w-1/2">
                    <p class="text-xl font-semibold">Bust</p>
                    <span>{{ $modelo->bust}}</span>
                </div>
                <div class="w-1/2">
                    <p class="text-xl font-semibold">Cintura</p>
                    <span>{{ $modelo->cintura}}</span>
                </div>
                <div class="w-1/2">
                    <p class="text-xl font-semibold">Zapatilla</p>
                    <span>{{ $modelo->zapato}}</span>
                </div>
                <div class="w-1/2">
                    <p class="text-xl font-semibold">Vestido</p>
                    <span>{{ $modelo->vestido}}</span>
                </div>
                <div class="w-1/2">
                    <p class="text-xl font-semibold">Tamaño</p>
                    <span>{{ $modelo->tamano}}</span>
                </div>
                <div class="w-1/2">
                    <p class="text-xl font-semibold">Eyes</p>
                    <span>{{ $modelo->ojos}}</span>
                </div>
                <div class="w-1/2">
                    <p class="text-xl font-semibold">Hair</p>
                    <span>{{ $modelo->cabello}}</span>
                </div>
                <div class="w-1/2">
                    <p class="text-xl font-semibold">Heigh</p>
                    <span>{{ $modelo->altura}}</span>
                </div>
            </div>
            <div class="flex flex-col gap-10 justify-center items-center">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                    <div class="w-full">
                        <p class="text-xl font-semibold">Country</p>
                        <span>{{ $modelo->ubicacion}}</span>
                    </div>
                    <div class="w-full">
                        <p class="text-xl font-semibold">Instagram</p>
                        <span>{{ $modelo->instagram}}</span>
                    </div>
                    <div class="w-full">
                        <p class="text-xl font-semibold">Birthday</p>
                        <span>{{ $modelo->fecha_nacimiento}}</span>
                    </div>
                </div>
                <div>
                    <div class="flex flex-wrap gap-2 justify-center my-10 ">
                        @forelse($modelo->estilos ?? [] as $estilo)
                            <span class="bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm">
                                {{ $estilo->name }}
                            </span>
                        @empty
                            <p class="text-gray-500 italic">Versatilidade en sus estilos.</p>
                        @endforelse
                    </div>
                </div>
            </div>
            <div class="w-full flex flex-col md:flex-row gap-5 md:gap-10 justify-center items-center">
                <a
                    href="{{ route('modelos.index') }}"
                    class="px-6 py-3 border border-gray-300 text-gray-700 font-medium hover:bg-gray-100 transition duration-200"
                >
                    ← Volver a Modelos
                </a>

                <a
                    href="#"
                    class="px-6 py-3 text-black border-2 border-black hover:bg-black hover:text-white font-semibold shadow-md transition duration-500"
                >
                    Solicitar Modelo
                </a>
            </div>
        </div>
    </section>
</x-layouts.main>