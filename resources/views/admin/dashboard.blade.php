<x-layouts.admin>
    <h1 class="hidden">Dashboard</h1>
    <div class="cardBox">
        <div class="card">
            <div>
                <div class="number">{{ $totalModelos }}</div>
                <div class="cardName">
                    <x-nav-link route="admin.modelos.index">Modelos Admin</x-nav-link>
                    {{-- <a href="{{ route('admin.modelos.index') }}" >Modelos Admin</a> --}}
                </div>
            </div>
            <div class="iconBx">
                <ion-icon name="briefcase-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="number">{{ $totalServicios }}</div>
                <div class="cardName">
                    <x-nav-link route="admin.servicios.index">Servicios Admin</x-nav-link>
                    {{-- <a href="{{ route('admin.servicios.index') }}" >Serviços Admin</a> --}}
                </div>
            </div>
            <div class="iconBx">
                <ion-icon name="bar-chart-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div >
                <div class="number">{{ $totalPosts }}</div>
                <div class="cardName">
                    <x-nav-link route="admin.post.index">Post Admin</x-nav-link>
                    {{-- <a href="{{ route('admin.post.index') }}">Postagens Admin</a> --}}
                </div>
            </div>
            <div class="iconBx">
                <ion-icon name="eye-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="number">Control de Ventas</div>
                <div class="cardName">Ventas Views</div>
            </div>
            <div class="iconBx">
                <ion-icon name="card-outline"></ion-icon>
            </div>
        </div>
    </div>

    {{-- Order Admin --}}

    <div class="details">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2> All Services Actives </h2>
                <x-nav-link route="admin.servicios.index"><span class="btn">View All</span></x-nav-link>
                {{-- <a href="{{ route('admin.servicios.index') }}" class="btn">View All</a> --}}
            </div>

            <table>
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Price</td>
                        <td>Category</td>
                        <td>Status</td>
                        <td>View</td>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($allServicios as $servicios)
                        <tr>
                            <td>{{ $servicios->name }}</td>
                            <td>{{ number_format($servicios->price, 2) }}</td>
                            <td>
                                @foreach (json_decode($servicios->category) ?? [] as $cat)
                                    <span class="bg-gray-800 text-white px-2 py-1 rounded text-xs">{{ $cat }}</span>
                                @endforeach
                            </td>
                            <td><span class="status return">Active</span></td>
                            <td>
                                <x-nav-link route="admin.servicios.index" >
                                    <span class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 transition">Editar</span>
                                </x-nav-link>
                                {{-- <a href="{{ route('admin.servicios.details', $servicios->id) }}"
                                    class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 transition">
                                    Editar
                                </a> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- Nuevo algo --}}
        <div class="recentCustomers">
            <div class="cardHeader">
                <h2> All modelos </h2>
                <x-nav-link route="admin.modelos.index"><span class="btn">View All</span></x-nav-link>
                {{-- <a href="{{ route('admin.modelos.index') }}" class="btn">View All</a> --}}
            </div>

            <table>
                @foreach ($allModelos as $modelos)
                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="{{ $modelos->image }}" alt="{{ $modelos->name }}"></div>
                        </td>
                        <td>
                            <h3>{{ $modelos->name }}</h3>
                            <span>{{ $modelos->ubicacion }}</span>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

</x-layouts.admin>