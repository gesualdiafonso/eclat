<x-layouts.admin>
    <h1>Pedido #{{ $pedido->id }}</h1>
    <p>User: {{ $pedido->user?->name ?? 'Invitado' }}</p>
    <h3>Modelos</h3>
    <ul>
        @foreach ($pedido->modelos as $m)
            <li>{{ $m->modelo->name }} — qty: {{ $m->quantity }}</li>
        @endforeach
    </ul>

    <h3>Serviços</h3>
    <ul>
        @foreach ($pedido->servicos as $s)
            <li>{{ $s->servico->name }} — qty: {{ $s->quantity }}</li>
        @endforeach
    </ul>
</x-layouts.admin>
