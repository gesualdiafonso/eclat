<x-layouts.main>

    <section class="bg-white p-8 rounded shadow-md text-center">
        <div>
            <h1 class="text-3xl font-bold mb-4">Éclat Posts!</h1>
            <p class="text-gray-700">Verifique nuestras ultimas postagens</p>
        </div>
        <div>
            @foreach ($post as $pt)
                <div class="border-b border-gray-300 py-4">
                    <h2 class="text-xl font-semibold">{{ $pt->name }}</h2>
                    <p class="text-gray-600">{{ $pt->resume }}</p>
                    <p class="text-gray-600">{{ $pt->resume }}</p>
                    <span class="text-sm text-gray-500">
                        Publicado em: {{ optional($pt->created_at)->format('d/m/Y') ?? 'Sem data' }}
                    </span>
                </div>
            @endforeach
        </div>

    </section>

</x-layouts.main>