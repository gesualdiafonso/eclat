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

    <div class="cs-menu">
        <div class="cs-col cs-col-1">
            <div class="cs-menu-logo"></div>

            <div class="cs-links">
                <div class="cs-link">
                    <a href="<?= route('home')?>" class="">Home</a>
                </div>
                <div class="cs-link">
                    <a href="<?= route('modelos.index')?>">Modelos</a>
                </div>
                <div class="cs-link">
                    <a href="<?= route('servicios.index')?>">Servicio</a>
                </div>
                <div class="cs-link">
                    <a href="<?= route('post.index')?>">Posts</a>
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
        </div>
    </div>
    <div class="cs-header mx-auto">
        <h1 class="text-gray-50"><span>Éclat</span></h1>
    </div>

</header>
