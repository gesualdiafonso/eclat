<x-layouts.admin>
    <div class="max-w-3xl mx-auto py-12">
        <h1 class="text-3xl font-bold text-center text-[#2a2185] uppercase tracking-wider mb-10">
            Deletar Post
        </h1>

        <div class="bg-white shadow-lg rounded-2xl overflow-hidden border border-gray-200">

            {{-- Imagem do post --}}
            <div class="w-full h-72 overflow-hidden">
                <img src="{{ asset($post->image) }}"
                     alt="{{ $post->title }}"
                     class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
            </div>

            {{-- Informações do post --}}
            <div class="p-6 space-y-4">
                <h2 class="text-2xl font-semibold text-gray-800">{{ $post->title }}</h2>
                <p class="text-gray-600">{{ $post->excerpt ?? Str::limit($post->content, 150) }}</p>
                <p class="text-sm text-gray-500">Autor: {{ $post->author }}</p>
                <p class="text-sm text-gray-500">Categoria: {{ $post->category }}</p>
                <p class="text-sm text-gray-500">Slug: {{ $post->slug }}</p>
                <p class="text-sm text-gray-500">Resumo: {{ $post->resume }}</p>
                {{-- <p class="text-sm text-gray-500">Publicado em: {{ $post->created_at->format('d/m/Y') }}</p> --}}
            </div>

            {{-- Confirmação de exclusão --}}
            <div class="p-6 bg-gray-50 border-t border-gray-200">
                <p class="text-red-600 font-medium mb-4 text-center">
                    ⚠️ Tiene certeza que desea borrar este Post? Esta acción no va poder volver sus valores.

                <form method="POST" action="{{ route('admin.post.destroy', $post->id) }}"
                      onsubmit="return confirm('Você tem certeza que deseja deletar este post?')">
                    @csrf
                    @method('DELETE')

                    <div class="flex justify-center gap-4">
                        <a href="{{ route('admin.post.index') }}"
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
