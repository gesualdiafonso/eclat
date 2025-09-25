<?php
/**
 * @var \App\Models\Servicio $servicio
 */
?>

<x-layouts.admin>
    <section class="p-8 max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold mb-6">Editar Servicio</h1>

        <form method="POST" action="{{ route('admin.servicios.update', $servicio->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block font-bold">Nome</label>
                <input type="text" name="name" value="{{ old('name', $servicio->name) }}" class="w-full border p-2 rounded">
            </div>

            <div class="mb-4">
                <label class="block font-bold">Slug</label>
                <input type="text" name="slug" value="{{ old('slug', $servicio->slug) }}" class="w-full border p-2 rounded">
            </div>

            <div class="mb-4">
                <label class="block font-bold">Resumo</label>
                <textarea name="resume" class="w-full border p-2 rounded">{{ old('resume', $servicio->resume) }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block font-bold">Descrição</label>
                <textarea name="descript" class="w-full border p-2 rounded">{{ old('descript', $servicio->descript) }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block font-bold">Categorias (JSON)</label>
                <textarea name="category" class="w-full border p-2 rounded">{{ old('category', $servicio->category) }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block font-bold">Preço</label>
                <input type="number" step="0.01" name="price" value="{{ old('price', $servicio->price) }}" class="w-full border p-2 rounded">
            </div>

            <div class="mb-4">
                <label class="block font-bold">Imagem</label>
                <input type="file" name="image" class="w-full border p-2 rounded">
                @if($servicio->image)
                    <img src="{{ asset($servicio->image) }}" alt="Imagem atual" class="mt-2 w-32 rounded">
                @endif
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
                Salvar alterações
            </button>
        </form>
    </section>
</x-layouts.admin>
