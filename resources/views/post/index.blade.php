<x-layouts.main>
    <x-slot:title>Éclat Blog, confira nuestros post.</x-slot:title>

    <section class="container mx-auto px-10 md:px-20 bg-white p-2 md:p-8 rounded shadow-md relative flex flex-col justify-center items-center ">
        <div>
            <h2 class="text-3xl font-bold mb-4 text-center">Éclat Posts!</h2>
            <p class="text-gray-700">Verifique nuestras ultimas postagens</p>
        </div>

        <section class="w-full h-full mb-16 shadow-lg group">
            <div class="w-full h-full lg:h-96 flex flex-col lg:flex-row gap-5 md:gap-10 p-10">
                <img
                    src="{{ asset($lastPost->image) }}"
                    alt="{{ $lastPost->name }}"
                    class="inset-0 w-full h-full object-cover brightness-75 group-hover:brightness-90 transition-all duration-500"
                >

                <div class="text-gray-700 max-w-4xl ">
                    <h3 class="text-3xl lg:text-5xl font-bold leading-tight mb-4 tracking-wide">
                        {{ $lastPost->name }}
                    </h3>
                    <p class="text-black text-base lg:text-lg mb-6 line-clamp-3">
                        {{ $lastPost->resume }}
                    </p>
                    <div class="flex items-center gap-4 text-sm text-gray-600">
                        <span>{{ optional($lastPost->created_at)->format('d/m/Y') ?? 'Sem data' }}</span>
                        <span class="w-1 h-1 bg-gray-400 rounded-full"></span>
                        <span>por {{ $lastPost->author ?? 'ÉCLAT' }}</span>
                    </div>
                    <a href="{{ route('post.show', $lastPost->id) }}"
                        class="w-1/2 mt-6 mx-auto inline-block text-center px-6 py-3 bg-white text-black font-semibold uppercase shadow-md hover:bg-gray-100 transition">
                        Leer más
                    </a>
                </div>
            </div>
        </section>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-10">
            @foreach ($posts as $pt)
                <div class="border-b border-gray-300 py-4 w-full md:w-1/2 relative">
                    <div class="absolute w-48 h-32 -z-1 opacity-70">
                        <img class="w-full h-full overflow-hidden object-cover hover:scale-105 transition-transform duration-300"
                            src="{{ asset($pt->image) }}"
                            alt="{{ $pt->name }}"
                        >
                    </div>
                    <div class="relative w-full flex flex-col bg-gray-950 h-full mt-20">
                        <h2 class="text-xl font-semibold">{{ $pt->name }}</h2>
                        <p class="text-gray-600">{{ $pt->resume }}</p>
                        <span class="text-sm text-gray-500">
                            Publicado em: {{ optional($pt->created_at)->format('d/m/Y') ?? 'Sem data' }}
                        </span>
                        <a href="{{ route('post.show', $pt->id) }}"
                            class="mt-4 inline-block px-4 py-2 rounded-lg text-black font-semibold hover:border-b-2 hover:border-black transition">
                            Ver Perfil
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

    </section>

</x-layouts.main>