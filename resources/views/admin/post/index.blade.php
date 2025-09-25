<?php
/**
 * @var \Illuminate\Support\Collection|\App\Models\Post[] $posts
 */
?>

<x-layouts.admin>
    <section class="p-8">
        <h1 class="text-3xl font-bold mb-6">Posts</h1>

        @if (session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        <div class="text-center w-full my-10">
            <a href="{{ route('admin.post.create') }}"
                class="bg-blue-600 text-white px-10 py-4 hover:bg-blue-700 transition">
                Adicionar Nuevo Post
            </a>
        </div>

        <div class="overflow-x-auto bg-white rounded shadow">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="p-3">ID</th>
                        <th class="p-3">Nombre</th>
                        <th class="p-3">Author</th>
                        <th class="p-3">Categorias</th>
                        <th class="p-3 text-center">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($posts as $post)
                        <tr class="border-b hover:bg-gray-100">
                            <td class="p-3">{{ $post->id }}</td>
                            <td class="p-3 font-semibold">{{ $post->name }}</td>
                            <td class="p-3">Autho: {{ $post->author }}</td>
                            <td class="p-3">
                                <span class="bg-gray-800 text-white px-2 py-1 rounded text-xs">{{ $post->category }}</span>
                            </td>
                            <td class="p-3 text-center">
                                <a href="{{ route('admin.post.details', $post->id) }}"
                                    class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 transition mx-2">
                                    Editar
                                </a>
                                <a href="{{ route('admin.post.delete', $post->id) }}"
                                    class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-700 transition mx-2">
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
