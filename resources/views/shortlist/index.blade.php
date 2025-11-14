<x-layouts.main>
    <div class="max-w-5xl mx-auto px-6 py-16">

        <h1 class="text-4xl font-bold uppercase tracking-wide mb-10">
            Tu Shortlist
        </h1>

        {{-- MODEL0S --}}
        <h3 class="text-xl font-semibold mb-5">Modelos Seleccionados</h3>

        <div class="flex flex-wrap gap-4">
            @forelse($modelo as $m)
                <div class="w-48 relative group">
                    <img src="{{ asset($m->image) }}" alt="{{ $m->name }}"
                         class="w-full h-auto group-hover:opacity-50 transition duration-300">

                    <span class="absolute bottom-0 px-4 py-2 text-white font-medium
                                 opacity-0 group-hover:opacity-100 duration-300">
                        {{ $m->name }}
                    </span>
                </div>
            @empty
                <p class="text-gray-400">No hay modelo seleccionado.</p>
            @endforelse
        </div>

        {{-- SERVICIOS --}}
        <h3 class="text-xl font-semibold mt-10 mb-5">Servicios Seleccionados</h3>

        <div class="flex flex-wrap gap-4">
            @forelse($servicio as $s)
                <div class="w-48 relative group">
                    <img src="{{ asset($s->image) }}" alt="{{ $s->name }}"
                         class="w-full h-auto group-hover:opacity-40 transition duration-300">

                    <span class="absolute bottom-0 px-2 py-2 text-white font-medium
                                 opacity-0 group-hover:opacity-100 duration-300">
                        {{ $s->name }}
                    </span>
                </div>
            @empty
                <p class="text-gray-400">No hay servicios seleccionado.</p>
            @endforelse
        </div>

        {{-- USUÁRIO LOGADO --}}
        @auth
            <div class="mt-12 border p-6 rounded bg-gray-50">
                <h2 class="text-xl font-semibold mb-4">Datos del Usuario</h2>

                <p><strong>Nombre:</strong> {{ auth()->user()->name }}</p>
                <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
            </div>

            <form method="POST" action="{{ route('pedido.finalize') }}" class="mt-10">
                @csrf
                <button class="px-6 py-3 bg-black text-white rounded hover:bg-gray-800 transition">
                    Confirmar Contratación
                </button>
            </form>
        @endauth


        {{-- USUÁRIO NÃO LOGADO --}}
        @guest
            <div class="mt-12 border p-6 rounded bg-gray-100">
                <h2 class="text-xl font-semibold mb-4">Para continuar, inicia sesión o regístrate</h2>

                <div class="flex gap-4">
                    <a href="{{ route('auth.login.show') }}"
                       class="px-6 py-3 bg-black text-white rounded hover:bg-gray-800 transition">
                        Iniciar Sesión
                    </a>

                    <a href="{{ route('auth.register') }}"
                       class="px-6 py-3 bg-white border border-black rounded hover:bg-black hover:text-white transition">
                        Crear Cuenta
                    </a>
                </div>
            </div>
        @endguest

    </div>
</x-layouts.main>
