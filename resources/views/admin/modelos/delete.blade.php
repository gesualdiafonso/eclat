<x-layouts.admin>
    <div class="max-w-3xl mx-auto py-12">
        <h1 class="text-3xl font-bold text-center text-[#2a2185] uppercase tracking-wider mb-10">
            Deletar modelo
        </h1>

        <div class="bg-white shadow-lg rounded-2xl overflow-hidden border border-gray-200">

            {{-- Imagem do modelo --}}
            <div class="w-full h-96 overflow-hidden bg-cover bg-top">
                <img src="{{ asset($modelo->image) }}"
                     alt="{{ $modelo->name }}"
                     class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
            </div>

            {{-- Informações do modelo --}}
            <div class="p-6 space-y-4">
                <h2 class="text-2xl font-semibold text-gray-800">{{ $modelo->name }}</h2>
                <p class="text-gray-600">{{ $modelo->instagram }}</p>
                <div class="flex flex-row gap-10">
                    <span class="text-gray-500">Bust: {{ $modelo->bust}}</span>
                    <span class="text-gray-500">Cintura: {{ $modelo->cintura}}</span>
                    <span class="text-gray-500">Altura: {{ $modelo->altura}}</span>
                    <span class="text-gray-500">Zapatilla: {{ $modelo->zapato}}</span>
                    <span class="text-gray-500">Vestido: {{ $modelo->vestido}}</span>
                    <span class="text-gray-500">Tamaño: {{ $modelo->tamano}}</span>
                    <span class="text-gray-500">Ojos: {{ $modelo->ojos}}</span>
                    <span class="text-gray-500">Cabello: {{ $modelo->cabello}}</span>
                </div>
                <div class="flex flex-row">
                    <p class="text-gray-600">{{ $modelo->fecha_nacimento }}</p>
                    <p class="text-gray-600">{{ $modelo->ubicacion }}</p>
                </div>
                <p class="text-gray-600">{{ $modelo->description }}</p>
                <div class="text-gray-600 flex flex-col gap-2">
                    @foreach (json_decode($modelo->estilos) as $category)
                        <span>{{ $category }}</span>
                    @endforeach
                </div>

                {{-- <p class="text-sm text-gray-500">Publicado em: {{ $modelo->created_at->format('d/m/Y') }}</p> --}}
            </div>

            {{-- Confirmação de exclusão --}}
            <div class="p-6 bg-gray-50 border-t border-gray-200">
                <p class="text-red-600 font-medium mb-4 text-center">
                    ⚠️ Tiene certeza que desea borrar este(a) modelo? Esta acción no va poder volver sus valores.
                </p>

                <form method="POST" action="{{ route('admin.modelos.destroy', $modelo->id) }}"
                      onsubmit="return confirm('Você tem certeza que deseja deletar este modelo?')">
                    @csrf
                    @method('DELETE')

                    <div class="flex justify-center gap-4">
                        <a href="{{ route('admin.modelos.index') }}"
                           class="px-6 py-2 rounded-lg bg-gray-300 text-gray-800 font-semibold hover:bg-gray-400 transition">
                            Cancelar
                        </a>

                        <button type="submit"
                                class="px-6 py-2 rounded-lg bg-red-600 text-white font-semibold hover:bg-red-700 transition">
                            Deletar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.admin>
