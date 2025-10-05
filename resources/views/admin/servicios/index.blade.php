<?php
/**
 * @var \Illuminate\Support\Collection|\App\Models\Servicio[] $servicios
 */
?>

<x-layouts.admin>
    <section class="p-8">
        <h1 class="text-3xl font-bold mb-6">Servicios</h1>

        @if (session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        <div class="text-center w-full my-10">
            <x-nav-link route="admin.servicios.create">
                <span class="bg-blue-600 text-white px-10 py-4 hover:bg-blue-700 transition">
                    Agregar Nuevo Servicio
                </span>
            </x-nav-link>
            {{-- <a href="{{ route('admin.servicios.create') }}"
                class="bg-blue-600 text-white px-10 py-4 hover:bg-blue-700 transition">
                Adicionar Nuevo Servicio
            </a> --}}
        </div>

        <div class="overflow-x-auto bg-white shadow">
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
                    @forelse ($servicios as $servicio)
                        <tr class="border-b hover:bg-gray-100">
                            <td class="p-3">{{ $servicio->id }}</td>
                            <td class="p-3 font-semibold">{{ $servicio->name }}</td>
                            <td class="p-3">U${{ number_format($servicio->price, 2) }}</td>
                            <td class="p-3">
                                @foreach (json_decode($servicio->category) ?? [] as $cat)
                                    <span class="bg-gray-800 text-white px-2 py-1 rounded text-xs">{{ $cat }}</span>
                                @endforeach
                            </td>
                            <td class="p-3 text-center flex flex-col gap-4">
                                <a href="{{ route('admin.servicios.details', $servicio->id) }}"
                                    class="border-2 border-blue-700 text-black px-3 py-1 rounded hover:bg-blue-700 hover:text-white transition duration-500">
                                    Editar
                                </a>
                                <a href="{{ route('admin.servicios.delete', $servicio->id) }}"
                                    class="border-2 border-red-700 text-black px-3 py-1 rounded hover:bg-red-700 hover:text-white transition duration-500">
                                    Deletar
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
