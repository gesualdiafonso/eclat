<?php
/**
 * @var \Illuminate\Support\Collection|\App\Models\Servicio[] $servicios
 */
?>


<x-layouts.main>
    <section class="">
        <section class="max-w-7xl px-2 mx-auto">
            <h2>Servicios que ofrecemos desde ÉCLAT</h2>
            <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 my-10 mx-auto">
                @foreach($servicios as $servicio)
                    <article class="flex flex-col gap-2 px-8 py-5 mx-auto bg-white shadow-xl shadow-black/40">
                        <div class="p-3 text-center w-full">
                            <img class="w-full" src="{{ asset($servicio->image) }}" alt="{{ $servicio->name }}">
                        </div>
                        <div class="p-3">
                            <h2 class="text-2xl font-bold">{{ $servicio->name }}</h2>
                        <p class="text-lg">{{ $servicio->resume }}</p>

                        <ul class="flex flex-row gap-3 flex-wrap px-5 italic my-5 font-bold">
                            @foreach (json_decode($servicio->category) as $category)
                                    <li>{{ $category }}</li>
                            @endforeach
                        </ul>

                        <p class="text-3xl font-black text-center">U${{ number_format($servicio->price, 2) }}</p>

                        <div class="text-center w-full my-10">
                            <a href="{{ route('servicios.show', $servicio->id) }}"
                                class="border-2 border-black text-black px-24 py-4 hover:bg-black hover:text-white transition-all duration-500 shadow-inner inset-shadow-2xs">
                                Ver más
                            </a>
                        </div>
                    </article>
                @endforeach
            </section>
        </section>
    </section>
</x-layouts.main>
