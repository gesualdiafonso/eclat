<header class="">
    <div class="cs-logo"><a href="<?= route('home') ?>" class="uppercase text-bold text-xl fixed"><span>Éclat</span></a></div>
    <div class="cs-menu-toggle closed">
        <div class="cs-menu-toggle-icon">
            <div class="cs-hamburger closed">
                <div class="cs-menu-bar" data-position="top"></div>
                <div class="cs-menu-bar" data-position="bottom"></div>
            </div>
        </div>
        <div class="cs-menu-copy"><span>Menu</span></div>
    </div>

    @auth
    <div class="fixed bottom-9 right-9 flex items-center gap-4 z-1 bg-black p-3 rounded-full">

        <!-- Nome do usuário -->
        <span class="text-white text-sm tracking-wide uppercase">
            {{ Auth::user()->name }}
        </span>

        <!-- Logout -->
        <form action="{{ route('auth.logout') }}" method="POST">
            @csrf
            <button
                type="submit"
                class="px-3 py-1 text-xs uppercase tracking-wider bg-white backdrop-blur-md text-gray-800 border border-white/20 hover:text-white hover:bg-black hover:border-white/30 rounded-full transition-all duration-300"
            >
                Logout
            </button>
        </form>

        <x-nav-link
            route="client.profile"
            class="px-3 py-1 text-xs uppercase tracking-wider bg-white backdrop-blur-md text-gray-800 border border-white/20 hover:text-white hover:bg-black hover:border-white/30 rounded-full transition-all duration-300"
            >
            Ver Perfil
        </x-nav-link>

    </div>
    @endauth

    <div class="cs-menu">
        <div class="cs-col cs-col-1">
            <div class="cs-menu-logo"></div>

            <div class="cs-links">
                <div class="cs-link">
                    <x-nav-link route="home">Home</x-nav-link>
                </div>
                <div class="cs-link">
                    <x-nav-link route="modelos.index">Modelos</x-nav-link>
                    {{-- <a href="<?= route('modelos.index')?>">Modelos</a> --}}
                </div>
                <div class="cs-link">
                    <x-nav-link route="servicios.index">Servicios</x-nav-link>
                    {{-- <a href="<?= route('servicios.index')?>">Servicio</a> --}}
                </div>
                <div class="cs-link">
                    <x-nav-link route="post.index">Posts</x-nav-link>
                    {{-- <a href="<?= route('post.index')?>">Posts</a> --}}
                </div>
                <div class="cs-link">
                    <x-nav-link route="auth.login.show">Login</x-nav-link>
                </div>
            </div>

            <div class="cs-video-wrapper">
                <video autoplay muted loop>
                    <source src="{{ asset('assets/video/eclat_video.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>
        <div class="cs-col cs-col-1">
            <div class="cs-socials">
                <div class="cs-sub-col">
                    <p>Docente:</p>
                    <p>Santiago Gallino</p>
                    <p>Portales y Comercio Electronico</p>
                </div>
                <div class="cs-sub-col">
                    <p>Alumnos:</p>
                    <p>Afonso Arruda</p>
                    <p>Lisa Bauer</p>
                </div>
            </div>
            @auth
            <div class="fixed bottom-9 right-9 flex items-center gap-4 z-[9999] bg-white p-3">

                <!-- Nome do usuário -->
                <x-nav-link route="client.profile">
                    <span class="text-black text-sm tracking-wide uppercase">
                        {{ Auth::user()->name }}
                    </span>
                </x-nav-link>

                <!-- Logout -->
                <form action="{{ route('auth.logout') }}" method="POST">
                    @csrf
                    <button
                        type="submit"
                        class="px-3 py-1 text-xs uppercase tracking-wider bg-white backdrop-blur-md text-gray-800 border border-white/20 hover:text-white hover:bg-black hover:border-white/30 rounded-full transition-all duration-300"
                    >
                        Logout
                    </button>
                </form>

            </div>
            @endauth
        </div>
    </div>
    {{-- <div class="cs-header mx-auto">
        <h1 class="text-gray-50"><span>Éclat</span></h1>
    </div> --}}

</header>
