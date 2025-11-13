<x-layouts.admin>

    <div class="max-w-5xl mx-auto py-10">

        <h1 class="text-3xl font-bold text-[#2a2185] uppercase mb-6">
            Resultados para: "{{ $query }}"
        </h1>

        {{-- Modelos --}}
        @if($modelos->count())
            <div class="flex items-center justify-between mt-8 mb-3">
                <h2 class="text-2xl font-semibold text-gray-800">Modelos</h2>
                <x-nav-link route="admin.modelos.index">Ver todos</x-nav-link>
            </div>

            <div class="bg-white shadow p-5 rounded">
                @foreach($modelos as $m)
                    <div class="border-b py-3">
                        <strong>{{ $m->name }}</strong>
                    </div>
                @endforeach
            </div>
        @endif

        {{-- Posts --}}
        @if($posts->count())
            <div class="flex items-center justify-between mt-8 mb-3">
                <h2 class="text-2xl font-semibold text-gray-800">Posts</h2>
                <x-nav-link route="admin.post.index">Ver todos</x-nav-link>
            </div>

            <div class="bg-white shadow p-5 rounded">
                @foreach($posts as $p)
                    <div class="border-b py-3">
                        <strong>{{ $p->name }}</strong>
                    </div>
                @endforeach
            </div>
        @endif

        {{-- Servicios --}}
        @if($servicios->count())
            <div class="flex items-center justify-between mt-8 mb-3">
                <h2 class="text-2xl font-semibold text-gray-800">Servicios</h2>
                <x-nav-link route="admin.servicios.index">Ver todos</x-nav-link>
            </div>

            <div class="bg-white shadow p-5 rounded">
                @foreach($servicios as $s)
                    <div class="border-b py-3">
                        <strong>{{ $s->name }}</strong>
                    </div>
                @endforeach
            </div>
        @endif

        {{-- Usuários --}}
        {{-- @if($users->count())
            <div class="flex items-center justify-between mt-8 mb-3">
                <h2 class="text-2xl font-semibold text-gray-800">Usuários</h2>
                <x-nav-link route="admin.users.index">Ver todos</x-nav-link>
            </div>

            <div class="bg-white shadow p-5 rounded">
                @foreach($users as $u)
                    <div class="border-b py-3">
                        <strong>{{ $u->name }}</strong> — {{ $u->email }}
                    </div>
                @endforeach
            </div>
        @endif --}}

        @if(!$modelos->count() && !$posts->count() && !$servicios->count() && !$users->count())
            <p class="text-gray-500 mt-10 text-lg">
                Nenhum resultado encontrado.
            </p>
        @endif

    </div>

</x-layouts.admin>
