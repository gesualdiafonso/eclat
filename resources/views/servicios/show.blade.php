<?php
/**
 * @var \App\Models\Servicio $servicios
 */
?>

<x-layouts.main>

    <section class="bg-white p-8 rounded shadow-md text-center">
        <div class="border-b border-gray-300 py-4">
            <div class="flex flex-col md:flex-row gap-10">
                <div class="w-full flex-1/2">
                    <img class="w-full rounded-2xl" src="{{ asset($servicios->image) }}" alt="{{ $servicios->name }}">
                </div>
                <div class="w-full flex-col gpa-10 justify-between">
                    <div class="w-full">
                        <h2 class="text-3xl font-semibold my-2">{{ $servicios->name }}</h2>
                        <p class="text-gray-600 text-end my-2">{{ $servicios->descript }}</p>
                        <span class="text-gray-700">{{ $servicios->slug }}</span>
                        <ul class="flex flex-row gap-3 flex-wrap px-5 italic my-5 font-bold justify-center">
                            @foreach (json_decode($servicios->category) as $category)
                                    <li>{{ $category }}</li>
                            @endforeach
                        </ul>
                        <p class="text-3xl font-black text-center my-5">U${{ number_format($servicios->price, 2) }}</p>
                    </div>
                    <div class="w-full flex flex-col md:flex-row gap-5 md:gap-10 justify-center items-center">
                        <a
                            href="{{ route('servicios.index') }}"
                            class="px-6 py-3 rounded-full border border-gray-300 text-gray-700 font-medium hover:bg-gray-100 transition duration-200"
                        >
                            ← Volver a Servicios
                        </a>

                        <a
                            href="#"
                            class="px-6 py-3 rounded-full text-black border-2 border-black hover:bg-black hover:text-white font-semibold shadow-md transition duration-500"
                        >
                            Solicitar Servicio
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layouts.main>