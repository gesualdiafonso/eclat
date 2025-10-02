<x-layouts.admin>
    <?php
    /**
     * @var \Illuminate\Support\Collection|\App\Models\Servicio[] $servicios
     */
    ?>

        <section class="p-8">
            <h1 class="text-3xl font-bold mb-6">Servicios</h1>

            @if (session('success'))
                <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif
            <div class="text-center w-full my-10">
                <a href="{{ route('admin.servicios.create') }}"
                    class="bg-blue-600 text-white px-10 py-4 hover:bg-blue-700 transition">
                    Adicionar Nuevo Servicio
                </a>
            </div>

            <div class="overflow-x-auto bg-white rounded shadow">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="p-3">ID</th>
                            <th class="p-3">Nome</th>
                            <th class="p-3">Preço</th>
                            <th class="p-3">Categorias</th>
                            <th class="p-3 text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($modelo as $model)
                            <tr class="border-b hover:bg-gray-100">
                                <td class="p-3">{{ $model->id }}</td>
                                <td class="p-3 font-semibold">{{ $model->name }}</td>
                                <td class="p-3">U${{ number_format($model->price, 2) }}</td>
                                {{-- <td class="p-3">
                                    @foreach (json_decode($model->category) ?? [] as $cat)
                                        <span class="bg-gray-800 text-white px-2 py-1 rounded text-xs">{{ $cat }}</span>
                                    @endforeach
                                </td> --}}
                                <td class="p-3 text-center">
                                    <a href="{{ route('admin.servicios.details', $model->id) }}"
                                        class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 transition">
                                        Editar
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="p-3 text-center text-gray-500">
                                    Nenhum serviço cadastrado ainda.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </section>

</x-layouts.admin>