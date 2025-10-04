<x-layouts.main>

    <section class="container mx-auto px-20 bg-white p-2 md:p-8 rounded shadow-md relative flex flex-col justify-center items-center ">
        <div>
            <h2 class="text-3xl font-bold mb-4 text-center">Éclat Posts!</h2>
            <p class="text-gray-700">Verifique nuestras ultimas postagens</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-10">
            @foreach ($post as $pt)
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