<?php
/**
 * @var \Illuminate\Support\Collection|\App\Models\Servicio[] $servicios
 */
?>


<x-layouts.main>
    <x-slot:title>Éclat Servicios, el mejor casting encuentras aquí!</x-slot:title>
    <section class="relative h-auto bg-black mb-16">
        <div class="relative h-auto">
            <div>
                <img src="{{ asset('assets/images/eclat_background/3.jpg') }}" alt="Explore la moda Argentina, Fashion Weck Argentina 24 de mayo 2025">
            </div>
            <div class="absolute bottom-0 lg:bottom-10 text-white py-10 px-16 left-5">
                <h2 class="text-white text-xl md:text-3xl lg:text-5xl font-bold w-full md:w-1/2 m-0">Servicios exclusivos para su marca en la semana de la Moda en Argnetina</h2>
            </div>
        </div>
    </section>
    <section class="max-w-7xl px-2 mx-auto">
        <div>
            <div class="flex flex-col justify-center items-center">
                <h2 class="uppercase tracking-widest text-[#2a2185] text-xl md:text-3xl lg:text-5xl font-extrabold">
                    Confira los servicios que ofrecemos desde ÉCLAT
                </h2>
                <span class="mt-4 text-[#00ccff] text-xl font-semibold italic">
                    Descubre la exclusividad en cada servicio
                </span>
            </div>
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
