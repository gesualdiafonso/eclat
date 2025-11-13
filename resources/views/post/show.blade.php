<x-layouts.main>
    <div class="max-w-5xl mx-auto py-12 px-6">
        {{-- Título do post --}}
        <h1 class="text-4xl font-extrabold tracking-wide text-center text-[#2a2185] uppercase mb-10">
            {{ $post->name }}
        </h1>

        {{-- Imagem destaque --}}
        @if($post->image)
            <div class="mb-10">
                <img src="{{ asset($post->image) }}"
                     alt="{{ $post->name }}"
                     class="w-full h-[500px] object-cover shadow-lg">
            </div>
        @endif

        {{-- Info autor e categoria --}}
        <div class="flex items-center justify-between text-gray-600 text-sm mb-8">
            <p>
                ✍️ <span class="font-semibold">{{ $post->author }}</span>
            </p>
            <p>
                📂 <span class="italic">{{ $post->categoria->name ?? 'Sin categoría' }}</span>
            </p>
        </div>

        {{-- Resumen em destaque --}}
        <div class="bg-gray-100 border-l-4 border-[#2a2185] p-6 mb-8 shadow-sm">
            <p class="text-lg italic text-gray-700 leading-relaxed">
                “{{ $post->resume }}”
            </p>
        </div>

        {{-- Conteúdo principal --}}
        <article class="prose prose-lg max-w-none text-gray-800 leading-relaxed">
            {!! $post->content !!}
        </article>

        {{-- Slug + Data --}}
        <div class="mt-12 text-gray-500 text-xs text-right">
            <p>Slug: <span class="font-mono">{{ $post->slug }}</span></p>
            {{-- <p>Publicado en: {{ $post->created_at->format('d M Y, H:i') }}</p> --}}
        </div>

        {{-- Botões de ação --}}
        <div class="mt-10 flex justify-center gap-6">
            <a href="{{ route('post.index') }}"
               class="px-6 py-3 rounded-lg bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold transition">
                🔙 Volver
            </a>
        </div>
    </div>
</x-layouts.main>
