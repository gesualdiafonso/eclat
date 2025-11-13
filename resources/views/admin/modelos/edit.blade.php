<x-layouts.admin>
    <section class="pb-20">
        <div>
            <h1 class="text-center text-5xl my-10">Editar Modelo: {{ $modelo->name }}</h1>
        </div>
        <div class="flex relative flex-col md:flex-row gap-10">
            <div class="w-1/2 h-64 relative">
                <img src="{{ asset($modelo->image) }}" alt="{{ $modelo->name }}" class="w-2/5 h-auto object-cover fixed">
            </div>
            <div class="w-1/2 p-2">
                <form method="POST" action="{{ route('admin.modelos.update', $modelo->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                        <div class="mb-4">
                            <label class="block font-bold">Nombre</label>
                            <input type="text" name="name" value="{{ old('name', $modelo->name) }}" class="w-full border p-2 rounded">
                        </div>

                        <div class="mb-4">
                            <label class="block font-bold">Instagram</label>
                            <input type="text" name="instagram" value="{{ old('instagram', $modelo->instagram) }}" class="w-full border p-2 rounded">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-4 gap-5">
                        <div class="mb-4">
                            <label class="block font-bold">Altura</label>
                            <input type="text" name="altura" value="{{ old('altura', $modelo->altura) }}" class="w-full border p-2 rounded">
                        </div>

                        <div class="mb-4">
                            <label class="block font-bold">Bust</label>
                            <input type="text" name="bust" value="{{ old('bust', $modelo->bust) }}" class="w-full border p-2 rounded">
                        </div>

                        <div class="mb-4">
                            <label class="block font-bold">Cintura</label>
                            <input type="text" name="cintura" value="{{ old('cintura', $modelo->cintura) }}" class="w-full border p-2 rounded">
                        </div>

                        <div class="mb-4">
                            <label class="block font-bold">Zapatilla</label>
                            <input type="text" name="zapato" value="{{ old('zapato', $modelo->zapato) }}" class="w-full border p-2 rounded">
                        </div>

                        <div class="mb-4">
                            <label class="block font-bold">Vestido</label>
                            <input type="text" name="vestido" value="{{ old('vestido', $modelo->vestido) }}" class="w-full border p-2 rounded">
                        </div>

                        <div class="mb-4">
                            <label class="block font-bold">Tamaño</label>
                            <input type="text" name="tamano" value="{{ old('tamano', $modelo->tamano) }}" class="w-full border p-2 rounded">
                        </div>

                        <div class="mb-4">
                            <label class="block font-bold">Ojos</label>
                            <input type="text" name="ojos" value="{{ old('ojos', $modelo->ojos) }}" class="w-full border p-2 rounded">
                        </div>

                        <div class="mb-4">
                            <label class="block font-bold">Cabello</label>
                            <input type="text" name="cabello" value="{{ old('cabello', $modelo->cabello) }}" class="w-full border p-2 rounded">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                        <div class="mb-4">
                            <label class="block font-bold">Fecha de nacimiento</label>
                            <input type="date" name="fecha_nacimiento" value="{{ old('fecha_nacimiento', $modelo->fecha_nacimiento) }}" class="w-full border p-2 rounded">
                        </div>

                        <div class="mb-4">
                            <label class="block font-bold">Ubicación</label>
                            <input type="text" name="ubicacion" value="{{ old('ubicacion', $modelo->ubicacion) }}" class="w-full border p-2 rounded">
                        </div>

                        <div class="mb-4">
                            <label class="block font-bold">Campañas que completa su estilos</label>
                            <input type="text" name="campana" value="{{ old('campana', $modelo->campana) }}" class="w-full border p-2 rounded">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="block font-bold">Descripción</label>
                        <textarea name="description" class="w-full border p-2 rounded">{{ old('description', $modelo->description) }}</textarea>
                    </div>

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


                    <div class="mb-4">
                        <label class="block font-bold">Imagen</label>
                        <div class="grid grid-cols-2 gap-10">
                            <input type="file" name="image" class="w-full border p-2 rounded h-12">
                            @if($modelo->image)
                                <img src="{{ asset($modelo->image) }}" alt="Imagen actual" class="mt-2 w-32 rounded">
                            @endif
                        </div>
                    </div>

                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
                        Salvar alterações
                    </button>
                </form>
            </div>
        </div>
    </section>
</x-layouts.admin>
