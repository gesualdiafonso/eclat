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
                        <span class="title">Admin Servicios</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.post.index') }}">
                        <span class="icon">
                            <ion-icon name="albums-outline"></ion-icon>
                        </span>
                        <span class="title">Admin Posts</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.modelos.index') }}">
                        <span class="icon">
                            <ion-icon name="aperture-outline"></ion-icon>
                        </span>
                        <span class="title">Admin Modelos</span>
                    </a>
                </li>
                @auth
                    <li>
                        <form action="{{ route('auth.logout') }}" method="POST" class="text-white hover:text-black focus:text-black">
                            @csrf
                                <span class="icon ">
                                    <ion-icon name="log-out-outline"></ion-icon>
                                </span>
                                <button type="submit" class="title text-white hover:text-black text-xl">Sing Out</button>
                        </form>
                    </li>
                    <span class="title text-3xl text-white text-center mx-auto my-10">{{auth()->user()->name}}</span>
                @else
                    <li>
                        <a href="{{ route('auth.login.show') }}">
                            <span class="icon">
                                <ion-icon name="aperture-outline"></ion-icon>
                            </span>
                            <span class="title">Ingressar</span>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</header>