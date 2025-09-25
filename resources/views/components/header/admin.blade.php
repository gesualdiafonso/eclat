<header>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/images/logos/logoEclat.ico') }}" alt="Éclat Logo" class="icon">
                        <span class="title">Éclat</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.dashboard') }}">
                        <span class="icon">
                            <ion-icon name="analytics-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>

                </li>

                <li>
                    <a href="{{ route('admin.servicios.index') }}">
                        <span class="icon">
                            <ion-icon name="browsers-outline"></ion-icon>
                        </span>
                        <span class="title">Servicios</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.post.index') }}">
                        <span class="icon">
                            <ion-icon name="albums-outline"></ion-icon>
                        </span>
                        <span class="title">Posts</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sing Out</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</header>