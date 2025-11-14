<x-layouts.admin>
    <section class="p-8">
        <h1 class="text-2xl font-bold mb-6">Pedidos</h1>
        <div class="overflow-x-auto bg-white shadow">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-200 border border-black">
                        <th class="p-3 border border-black">Identificador</th>
                        <th class="p-3 border border-black">User</th>
                        <th class="p-3 border border-black">Modelos</th>
                        <th class="p-3 border border-black">Servicio</th>
                        <th class="p-3 border border-black">Status</th>
                        <th class="p-3 border border-black">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pedidos as $p)
                        <tr class="hover:bg-gray-300">
                            <td class="p-3 border border-black">#{{ $p->id }}</td>
                            <td class="p-3 border border-black">{{ $p->user ? $p->user->name : 'Invitado' }}</td>
                            <td class="p-3 border border-black">
                                @foreach ($p->modelos as $m)
                                    {{ $m->modelo->name }},
                                @endforeach
                            </td>
                            <td class="p-3 border border-black">
                                @foreach ($p->servicios as $s)
                                    {{ $s->servicio->name }},
                                @endforeach
                            </td>
                            <td class="p-3 border border-black">{{ $p->status }}</td>
                            <td class="p-3 border border-black text-center">
                                <a
                                    href="{{ route('admin.pedidos.show', $p) }}"
                                    class="border-2 border-black text-black px-3 py-1 rounded hover:bg-black hover:text-white transition duration-500 w-full text-center">
                                    Ver
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.admin>
