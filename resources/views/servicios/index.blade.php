<?php
/**
 * @var \Illuminate\Support\Collection|\App\Models\Servicio[] $servicios
 */
?>


<x-layouts.main>
    <section>
        <h2>Servicios que ofrecemos desde ÉCLAT</h2>
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 my-10 mx-auto">
            @foreach($servicios as $servicio)
                <article class="flex flex-col gap-2 px-8 py-5 mx-auto bg-gray-900 text-white rounded-3xl">
                    <div class="p-3 text-center w-full">
                        <img class="w-full rounded-2xl" src="{{ asset($servicio->image) }}" alt="{{ $servicio->name }}">
                    </div>
                    <div class="p-3">
                        <h2 class="text-2xl font-bold italic text-center">{{ $servicio->name }}</h2>
                    <p class="text-lg">{{ $servicio->resume }}</p>

                    <ul class="flex flex-row gap-3 flex-wrap px-5 italic my-5 font-bold">
                        @foreach (json_decode($servicio->category) as $category)
                                <li>{{ $category }}</li>
                        @endforeach
                    </ul>

                    <p class="text-3xl font-black text-center">U${{ number_format($servicio->price, 2) }}</p>

                    <div class="text-center w-full my-5">
                        <a href="{{ route('servicios.show', $servicio->id) }}"
                            class="bg-blue-600 text-white px-10 py-4 hover:bg-blue-700 transition rounded-2xl">
                            Ver más
                        </a>
                    </div>
                </article>
            @endforeach
        </section>
    </section>
</x-layouts.main>
