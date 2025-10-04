<x-layouts.admin>
    <section  class="max-w-7xl mx-auto p-6 bg-white  shadow">
        <h1 class="text-2xl font-bold mb-6">Criar Servicio</h1>

        {{-- Exibir erros --}}
        @if ($errors->any())
            <div class="mb-6 border border-red-400 bg-gradient-to-r from-red-500 to-pink-500 text-white shadow-lg">
                <div class="p-4">
                    <h2 class="text-xl font-extrabold italic tracking-wide mb-2">Ups... encontramos um problema ✦</h2>
                    <ul class="space-y-1 text-sm font-medium">
                        @foreach ($errors->all() as $error)
                            <li class="flex items-center gap-2">
                                <span class="inline-block w-2 h-2 bg-white "></span>
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        <form method="POST" action="{{ route('admin.servicios.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="mb-4">
                    <label class="block font-bold">Nombre</label>
                    <input type="text" name="name" class="w-full border p-2 " >
                </div>

                <div class="mb-4">
                    <label class="block font-bold">Slug</label>
                    <input type="text" name="slug" class="w-full border p-2 " >
                </div>

                <div class="mb-4">
                    <label class="block font-bold">Resumo</label>
                    <textarea name="resume" class="w-full border p-2 " ></textarea>
                </div>

                <div class="mb-4">
                    <label class="block font-bold">Descripción</label>
                    <textarea name="descript" class="w-full border p-2 " ></textarea>
                </div>

                <div class="mb-4">
                    <label class="block font-bold">Categorías</label>
                    <input type="text" name="category" class="w-full border p-2 ">
                </div>

                <div class="mb-4">
                    <label class="block font-bold">Imagen</label>
                    <input type="file" name="image" accept="image/*" class="w-full border p-2  bg-amber-50">
                </div>

                <div class="mb-4">
                    <label class="block font-bold">Precio</label>
                    <input type="number" step="0.01" name="price" class="w-full border p-2 " >
                </div>
            </div>

            <div class="w-full mt-4">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 transition text-white px-6 py-2 -lg shadow-md">
                    Salvar
                </button>
            </div>
        </form>
    </section>
</x-layouts.admin>
