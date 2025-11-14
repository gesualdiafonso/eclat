<x-layouts.admin>
    <section class="min-h-screen w-full bg-[#0d0d0f] py-16 px-6 flex justify-center">
        <div class="w-full max-w-4xl bg-[#141416] shadow-xl shadow-black/40 border border-[#2a2185]/20 rounded-2xl p-10">

            <!-- TÍTULO -->
            <header class="mb-10 text-center">
                <h1 class="text-4xl md:text-5xl tracking-wide font-extrabold text-black uppercase">
                    Pedido <span class="text-black">#{{ $pedido->id }}</span>
                </h1>
                <p class="mt-2 text-lg text-gray-500 tracking-wide">
                    Cliente:
                    <span class="font-semibold text-black">
                        {{ $pedido->user?->name ?? 'Invitado' }}
                    </span>
                </p>
            </header>

            <!-- MODELOS -->
            <section class="mb-12">
                <h3 class="text-2xl font-semibold tracking-wider text-black uppercase border-b border-white/10 pb-2">
                    Modelos selecionados
                </h3>

                @if ($pedido->modelos->count() > 0)
                    <ul class="mt-6 space-y-4">
                        @foreach ($pedido->modelos as $m)
                            <li class="flex justify-between items-center bg-white/5 px-5 py-3 rounded-xl border border-white/10 hover:border-[#c4b38a] transition-all">
                                <span class="text-lg text-black font-medium tracking-wide">
                                    {{ $m->modelo->name }}
                                </span>
                                <span class="text-[#c4b38a] font-semibold text-lg">
                                    x{{ $m->quantity }}
                                </span>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-gray-400 mt-4">Nenhum modelo selecionado.</p>
                @endif
            </section>

            <!-- SERVIÇOS -->
            <section class="mb-12">
                <h3 class="text-2xl font-semibold tracking-wider text-black uppercase border-b border-white/10 pb-2">
                    Servicios contratados
                </h3>

                @if ($pedido->servicios->count() > 0)
                    <ul class="mt-6 space-y-4">
                        @foreach ($pedido->servicios as $s)
                            <li class="flex justify-between items-center bg-white/5 px-5 py-3 rounded-xl border border-white/10 hover:border-[#c4b38a] transition-all">
                                <span class="text-lg text-black font-medium tracking-wide">
                                    {{ $s->servicio->name }}
                                </span>
                                <span class="text-black font-semibold text-lg">
                                    x{{ $s->quantity }}
                                </span>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-gray-400 mt-4">Nenhum serviço contratado.</p>
                @endif
            </section>
            <x-nav-link route="admin.pedidos.index" class="px-6 py-3 border border-gray-300 text-gray-700 font-medium hover:bg-gray-100 transition duration-200"> ← Volver</x-nav-link>
        </div>
    </section>

</x-layouts.admin>
