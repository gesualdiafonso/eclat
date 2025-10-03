<x-layouts.admin>

    <h2>Dashboard</h2>
    <div class="cardBox">
        <div class="card">
            <div>
                <div class="number">Numero de Modelos</div>
                <div class="cardName">Modelos Admin</div>
            </div>
            <div class="iconBx">
                <ion-icon name="briefcase-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="number">Numero de Serviços</div>
                <div class="cardName">Serviços Admin</div>
            </div>
            <div class="iconBx">
                <ion-icon name="bar-chart-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="number">Controle de Postagem</div>
                <div class="cardName">Postagens Admin</div>
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
                <h2> Recent Orders</h2>
                <a href="" class="btn">View All</a>
            </div>

            <table>
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Service</td>
                        <td>Value</td>
                        <td>Import</td>
                        <td>Status</td>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Name</td>
                        <td>Service</td>
                        <td>Value</td>
                        <td>Import</td>
                        <td><span class="status return">Actions</span></td>
                    </tr>

                    <tr>
                        <td>Name</td>
                        <td>Service</td>
                        <td>Value</td>
                        <td>Import</td>
                        <td><span class="status inProgress">In progress</span></td>
                    </tr>

                    <tr>
                        <td>Name</td>
                        <td>Service</td>
                        <td>Value</td>
                        <td>Import</td>
                        <td><span class="status pending">Pedding</span></td>
                    </tr>

                    <tr>
                        <td>Name</td>
                        <td>Service</td>
                        <td>Value</td>
                        <td>Import</td>
                        <td>Actions</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- Nuevo algo --}}
        <div class="recentCustomers">
            <div class="cardHeader">
                <h2> Recent Customers</h2>
            </div>

            <table>
                <tr>
                    <td width="60px">
                        <div class="imgBx"><img src="{{ asset('assets/images/modelos_eclat/andressa.jpg') }}" alt=""></div>
                    </td>
                    <td>
                        <h4>Name <br> <span>Contry</span></h4>
                    </td>
                </tr>

                <tr>
                    <td width="60px">
                        <div class="imgBx"><img src="{{ asset('assets/images/modelos_eclat/andressa.jpg') }}" alt=""></div>
                    </td>
                    <td>
                        <h4>Name <br> <span>Contry</span></h4>
                    </td>
                </tr>

                <tr>
                    <td width="60px">
                        <div class="imgBx"><img src="{{ asset('assets/images/modelos_eclat/andressa.jpg') }}" alt=""></div>
                    </td>
                    <td>
                        <h4>Name <br> <span>Contry</span></h4>
                    </td>
                </tr>

                <tr>
                    <td width="60px">
                        <div class="imgBx"><img src="{{ asset('assets/images/modelos_eclat/andressa.jpg') }}" alt=""></div>
                    </td>
                    <td>
                        <h4>Name <br> <span>Contry</span></h4>
                    </td>
                </tr>

                <tr>
                    <td width="60px">
                        <div class="imgBx"><img src="{{ asset('assets/images/modelos_eclat/andressa.jpg') }}" alt=""></div>
                    </td>
                    <td>
                        <h4>Name <br> <span>Contry</span></h4>
                    </td>
                </tr>
            </table>
        </div>
    </div>

</x-layouts.admin>