<x-layouts.admin>
    <section class="p-6 max-w-2xl mx-auto">
        <h1 class="text-2xl font-bold mb-6">Criar Serviço</h1>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>• {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('admin.servicios.store') }}">
            @csrf

            <div class="mb-4">
                <label class="block font-bold">Nome</label>
                <input type="text" name="name" class="w-full border p-2 rounded" required>
            </div>

            <div class="mb-4">
                <label class="block font-bold">Slug</label>
                <input type="text" name="slug" class="w-full border p-2 rounded" required>
            </div>

            <div class="mb-4">
                <label class="block font-bold">Resumo</label>
                <textarea name="resume" class="w-full border p-2 rounded"></textarea>
            </div>

            <div class="mb-4">
                <label class="block font-bold">Preço</label>
                <input type="number" step="0.01" name="price" class="w-full border p-2 rounded" required>
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
                Salvar
            </button>
        </form>
    </section>
</x-layouts.admin>
