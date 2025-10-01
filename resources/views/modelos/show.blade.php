<x-layouts.main>
    <section class="flex flex-row gap-0 mt-3">
        <div class="w-full">
            <img src="{{ asset($modelo->image) }}"
                alt="{{ $modelo->name }}"
                class="w-full"
            >
        </div>
        <div class="w-full py-5 px-10">
            <div class="text-center my-5"><h2 class="text-5xl font-bold">{{ $modelo->name}}</h2></div>
            <div class="flex flex-row gap-10 my-10">
                <div class="w-1/2">
                    <p class="text-xl font-semibold">Country</p>
                    <span>{{ $modelo->ubicacion}}</span>
                </div>
                <div class="w-1/2">
                    <p class="text-xl font-semibold">Eyes</p>
                    <span>{{ $modelo->ojos}}</span>
                </div>
                <div class="w-1/2">
                    <p class="text-xl font-semibold">Hair</p>
                    <span>{{ $modelo->cabello}}</span>
                </div>
                <div class="w-1/2">
                    <p class="text-xl font-semibold">Heigh</p>
                    <span>{{ $modelo->altura}}</span>
                </div>
                <div class="w-1/2">
                    <p class="text-xl font-semibold">Birthday</p>
                    <span>{{ $modelo->fecha_nacimiento}}</span>
                </div>
            </div>
            <div>
                <p>{{ $modelo->description }}</p>
            </div>
        </div>
    </section>
</x-layouts.main>