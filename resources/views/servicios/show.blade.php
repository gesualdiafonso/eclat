<?php
/**
 * @var \App\Models\Servicio $servicios
 */
?>

<x-layouts.main>

    <section class="bg-white p-8 rounded shadow-md text-center">
        <div class="border-b border-gray-300 py-4">
            <div class="flex flex-row gap-10">
                <div class="w-full flex-1/2">
                    <img class="w-full rounded-2xl" src="{{ asset($servicios->image) }}" alt="{{ $servicios->name }}">
                </div>
                <div class="w-full">
                    <h2 class="text-3xl font-semibold my-2">{{ $servicios->name }}</h2>
                    <p class="text-gray-600 my-2">{{ $servicios->descript }}</p>
                    <span class="text-gray-700">{{ $servicios->slug }}</span>
                    <ul class="flex flex-row gap-3 flex-wrap px-5 italic my-5 font-bold justify-center">
                        @foreach (json_decode($servicios->category) as $category)
                                <li>{{ $category }}</li>
                        @endforeach
                    </ul>
                    <p class="text-3xl font-black text-center my-5">U${{ number_format($servicios->price, 2) }}</p>

                </div>
            </div>
        </div>
    </section>

</x-layouts.main>