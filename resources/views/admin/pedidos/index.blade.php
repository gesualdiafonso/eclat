<x-layouts.admin>
    <h1 class="text-2xl">Pedidos</h1>
    <table class="w-full">
        <thead>
            <tr><th>#</th><th>User</th><th>Modelos</th><th>Serviços</th><th>Status</th><th>Acciones</th></tr>
        </thead>
        <tbody>
            @foreach ($pedidos as $p)
                <tr>
                    <td>#{{ $p->id }}</td>
                    <td>{{ $p->user ? $p->user->name : 'Invitado' }}</td>
                    <td>
                        @foreach ($p->modelos as $m)
                            {{ $m->modelo->name }},
                        @endforeach
                    </td>
                    <td>
                        @foreach ($p->servicios as $s)
                            {{ $s->servico->name }},
                        @endforeach
                    </td>
                    <td>{{ $p->status }}</td>
                    <td><a href="{{ route('admin.pedidos.show', $p) }}">Ver</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layouts.admin>
