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
                <x-nav-link route="admin.modelos.create">
                    <span class="bg-blue-600 text-white px-10 py-4 hover:bg-blue-700 transition">
                        Agregar Nuevo Modelo
                    </span>
                </x-nav-link>
                {{-- <a href="{{ route('admin.modelos.create') }}"
                    class="bg-blue-600 text-white px-10 py-4 hover:bg-blue-700 transition">
                    Adicionar Nuevo Servicio
                </a> --}}
            </div>

            <div class="overflow-x-auto bg-white shadow">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="p-3">ID</th>
                            <th class="p-3">Name</th>
                            <th class="p-3">Ubicación</th>
                            <th class="p-3">Details</th>
                            <th class="p-3 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($modelo as $model)
                            <tr class="border-b hover:bg-gray-100">
                                <td class="p-3"><span>{{ $model->id }}</span></td>
                                <td class="p-3 font-semibold"><h2>{{ $model->name }}</h2></td>
                                <td>{{ $model->ubicacion }}</td>
                                <td class="p-3 w-full">
                                    <ul class="grid grid-cols-1 md:grid-cols-4 gap-4">
                                        <li>Altura: {{ $model->altura}}</li>
                                        <li>Bust: {{ $model->bust}}</li>
                                        <li>Cintura: {{ $model->cintura}}</li>
                                        <li>Zapatilla: {{ $model->zapato}}</li>
                                        <li>Tamaño: {{ $model->tamano}}</li>
                                        <li>Ojos: {{ $model->ojo}}</li>
                                        <li>Cabello: {{ $model->cabello}}</li>
                                        <li>Instagram: {{ $model->instagram}}</li>
                                    </ul>
                                </td>
                                {{-- <td class="p-3">
                                    @foreach (json_decode($model->category) ?? [] as $cat)
                                        <span class="bg-gray-800 text-white px-2 py-1 rounded text-xs">{{ $cat }}</span>
                                    @endforeach
                                </td> --}}
                                <td class="p-3 text-center flex flex-col gap-4">
                                    {{-- <x-nav-link route="admin.modelos.edit">
                                        <span class="border-2 border-blue-700 text-black px-3 py-1 rounded hover:bg-blue-700 hover:text-white transition duration-500">
                                            Editar
                                        </span>
                                    </x-nav-link>
                                    <x-nav-link route="admin.modelos.delete">
                                        <span class="border-2 border-red-700 text-black px-3 py-1 rounded hover:bg-red-700 hover:text-white transition duration-500">
                                            Borrar
                                        </span>
                                    </x-nav-link> --}}
                                    <a href="{{ route('admin.modelos.edit', $model->id) }}"
                                        class="border-2 border-blue-700 text-black px-3 py-1 rounded hover:bg-blue-700 hover:text-white transition duration-500">
                                        Editar
                                    </a>
                                    <a href="{{ route('admin.modelos.delete', $model->id) }}"
                                        class="border-2 border-red-700 text-black px-3 py-1 rounded hover:bg-red-700 hover:text-white transition duration-500">
                                        Borrar
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