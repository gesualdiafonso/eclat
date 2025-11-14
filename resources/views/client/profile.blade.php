<x-layouts.main>
    <section class="max-w-7xl mx-auto px-4 pt-20">
        <h2 class="text-4xl md:text-6xl font-black text-end">Perfil de Usuario</h2>

        <div>
            <h3>Bienvenido, {{ auth()->user()->name }}</h3>
            <p>Correo electrónico: {{ auth()->user()->email }}</p>

            <div class="mt-8">
                <h3>Historial de Contrataciones</h3>

                @php
                    $pedidos = auth()->user()->pedidos()->with(['modelos.modelo','servicios.servico'])->orderByDesc('created_at')->get();
                @endphp

                @if ($pedidos->isEmpty())
                    <p>No hay compras registradas.</p>
                @else
                    <table class="w-full">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Modelos</th>
                                <th>Servicios</th>
                                <th>Estado</th>
                                <th>Fecha</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pedidos as $pedido)
                                <tr>
                                    <td>#{{ $pedido->id }}</td>
                                    <td>
                                        @foreach ($pedido->modelos as $pm)
                                            {{ $pm->modelo->name }} (x{{ $pm->quantity }})<br>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($pedido->servicios as $ps)
                                            {{ $ps->servico->name }} (x{{ $ps->quantity }})<br>
                                        @endforeach
                                    </td>
                                    <td>{{ $pedido->status }}</td>
                                    <td>{{ $pedido->created_at->format('d/m/Y H:i') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </section>
</x-layouts.main>
