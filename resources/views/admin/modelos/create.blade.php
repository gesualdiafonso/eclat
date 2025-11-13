<x-layouts.admin>
    <section class="max-w-7xl mx-auto p-6 bg-white rounded shadow">
        {{-- Mensagem de erro geral --}}
        @if ($errors->any())
        <div class="mb-6 p-4 rounded-lg border border-red-400 bg-red-100 text-red-700">
            <h2 class="font-bold text-lg mb-2">⚠️ Ocurrieron algunos errores al intentar crear el modelo:</h2>
            <ul class="list-disc list-inside space-y-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <h1 class="text-2xl font-bold mb-6 text-center">Cadastrar Nuevo Modelo</h1>

        <form method="POST" action="{{ route('admin.modelos.store') }}" enctype="multipart/form-data" >
            @csrf

            <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-10">
                {{-- Nombre --}}
                <div class="mb-4">
                    <label class="block font-bold">Nombre</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="w-full border p-2 rounded">
                    @error('name') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>

                {{-- Instagram --}}
                <div class="mb-4">
                    <label class="block font-bold">Instagram</label>
                    <input type="text" name="instagram" value="{{ old('instagram') }}" class="w-full border p-2 rounded">
                    @error('instagram') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
                    {{-- Altura --}}
                    <div class="mb-4">
                        <label class="block font-bold">Altura (cm)</label>
                        <input type="text" name="altura" value="{{ old('altura') }}" class="w-full border p-2 rounded">
                        @error('altura') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>

                    {{-- Bust --}}
                    <div class="mb-4">
                        <label class="block font-bold">Busto</label>
                        <input type="number" name="bust" value="{{ old('bust') }}" class="w-full border p-2 rounded">
                        @error('bust') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>

                    {{-- Cintura --}}
                    <div class="mb-4">
                        <label class="block font-bold">Cintura</label>
                        <input type="number" name="cintura" value="{{ old('cintura') }}" class="w-full border p-2 rounded">
                        @error('cintura') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>

                    {{-- Zapatilla --}}
                    <div class="mb-4">
                        <label class="block font-bold">Zapato</label>
                        <input type="number" name="zapato" value="{{ old('zapato') }}" class="w-full border p-2 rounded">
                        @error('zapato') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>

                    {{-- Vestido --}}
                    <div class="mb-4">
                        <label class="block font-bold">Vestido</label>
                        <input type="number" name="vestido" value="{{ old('vestido') }}" class="w-full border p-2 rounded">
                        @error('vestido') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>

                    {{-- Tamaño --}}
                    <div class="mb-4">
                        <label class="block font-bold">Tamaño</label>
                        <input type="text" name="tamano" value="{{ old('tamano') }}" class="w-full border p-2 rounded">
                        @error('tamano') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>

                    {{-- Ojos --}}
                    <div class="mb-4">
                        <label class="block font-bold">Ojos</label>
                        <input type="text" name="ojos" value="{{ old('ojos') }}" class="w-full border p-2 rounded">
                        @error('ojos') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>

                    {{-- Cabello --}}
                    <div class="mb-4">
                        <label class="block font-bold">Cabello</label>
                        <input type="text" name="cabello" value="{{ old('cabello') }}" class="w-full border p-2 rounded">
                        @error('cabello') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="flex flex-col gap-10">
                    {{-- Ubicación --}}
                    <div class="mb-4">
                        <label class="block font-bold">Ubicación</label>
                        <input type="text" name="ubicacion" value="{{ old('ubicacion') }}" class="w-full border p-2 rounded">
                        @error('ubicacion') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>

                    {{-- Fecha de Partida --}}
                    <div class="mb-4">
                        <label class="block font-bold">Fecha de nacimiento</label>
                        <input type="date" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" class="w-full border p-2 rounded">
                        @error('fecha_nacimiento') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>
                </div>

                {{-- Descrição --}}
                <div class="mb-4">
                    <label class="block font-bold">Descripción</label>
                    <textarea name="description" class="w-full border p-2 rounded">{{ old('description') }}</textarea>
                    @error('description') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>
                {{-- Campañas --}}
                <div class="mb-4">
                    <label class="block font-bold">Campañas que completa su estilos</label>
                    <input type="text" name="campana" value="{{ old('campana') }}" class="w-full border p-2 rounded">
                    @error('campana') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>

                {{-- Estilos --}}
                <div class="mb-4">
                    <label class="block text-lg font-semibold mb-2">Estilos</label>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-2">
                        @foreach($estilos as $estilo)
                            <label class="flex items-center space-x-2">
                                <input
                                    type="checkbox"
                                    name="estilos[]"
                                    value="{{ $estilo->estilos_id }}"
                                    @checked(in_array($estilo->estilos_id, $estilosSelecionados ?? []))
                                >
                                <span>{{ $estilo->name }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>

                {{-- Imagem --}}
                <div class="mb-4">
                    <label class="block font-bold">Imagen</label>
                    <input type="file" name="image" class="w-full border p-2 rounded">
                    @error('image') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 ">
                Cadastrar
            </button>
        </form>
    </section>
</x-layouts.admin>
