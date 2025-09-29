<x-layouts.main>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.23.12/dist/css/uikit.min.css" />

    <section class="relative h-auto bg-black">
        <div class="relative">
            <div class="">
                <video autoplay muted loop>
                    <source src="{{ asset('assets/video/eclat_video1.mp4') }}" type="video/mp4">
                </video>
            </div>
            <div class="absolute bottom-1/3 text-white w-1/2 p-2 left-10">
                <h2 class="text-white font-bold w-1/2 m-0">
                    Acá pensamos en todos los detalles!
                </h2>
                <p class="w-2/3 m-0">Criar experiencias que reflita el estilo de cada talento en las marcas de un modo simples y singular.</p>
            </div>
        </div>
    </section>

    <section class="relative h-auto bg-black">
        <div class="relative">
            <div class="">
                <video autoplay muted loop>
                    <source src="{{ asset('assets/video/eclat_video2.mp4') }}" type="video/mp4">
                </video>
            </div>
            <div class="absolute bottom-1/3 text-white w-1/2 p-2 left-10">
                <h2 class="text-white font-bold w-1/2 m-0">Cada detalle revela una historia.</h2>
                <p class="w-2/3 m-0">
                    En ÉCLAT, nacimos para transformar talento en impacto.
                    Creemos que la moda no es solo estética, es lenguaje, identidad y visión.
                    Nuestra esencia: unir marcas con profesionales que elevan cada proyecto a un nivel único.
                </p>
            </div>
        </div>
    </section>

    <section class="relative h-auto bg-black">
        <div class="relative">
            <div class="opacity-60">
                <video autoplay muted loop>
                    <source src="{{ asset('assets/video/eclat_video3.mp4') }}" type="video/mp4">
                </video>
            </div>
            <div class="absolute bottom-1/3 text-white w-1/2 p-10 right-0">
                <h2 class="text-white font-bold m-0">No llevamos rostros, llevaos talentos.</h2>
                <p class="m-0">
                    La importancia de la marca en agenciar modelos, no se trata solo de llevar un rostro.
                    Se trata de llevar conexión de talentos con una visión capacitada para comunicar la mejor manera de su marca.
                    Cada modelo aporta personalidad, presencia y estilo, que son evaluados según la campaña.
                    Nuestra cartera de profesionales es selccionada para garantizar el impacto y la autenticidad en cada proyecto.
                </p>
            </div>
        </div>
    </section>

    {{-- ******************* Servicios ******************* --}}
    <section class="mt-10">
        <div class="cs-line"></div>
        <div>
            <h2>Visualize el mejores servicios que puede encontrar.</h2>
            <span>Estrategia, estética y presencialidad que se sienten.</span>
        </div>
        <div class="cs-line"></div>
        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="center: true">

            <div class="uk-slider-items uk-grid">
                @foreach($servicios as $servicio)
                    <a  class="uk-width-1-3" href="<?= route('servicios.index')?>">
                        <div>
                            <div class="uk-panel uk-card uk-card-default uk-overflow-hidden uk-inline-clip uk-transition-toggle">
                                <img src="{{ asset($servicio->image) }}" alt="{{ $servicio->name }}" width="600" height="400" alt="">
                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
                                    <div class="uk-text-end">
                                        <h3 class="uk-margin-remove">{{ $servicio->name }}</h3>
                                        <p class="uk-margin-remove">{{ $servicio->resume ?? 'Descubre más sobre este servicio.' }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slider-item="next"></a>

        </div>
    </section>

    {{-- ******************* Modelos ******************* --}}
    <div class="cs-line"></div>
    <section class="mt-10 flex flex-row gap-10">
        <div class="w-full flex-1/2 flex flex-col justify-center items-center">
            <div>
                <h2 class="text-5xl font-bold m-0">Personalidades que hablan, estilos que conectan.</h2>
                <span class="font-light text-xl mb-5">Un portafolio que reúne profesionales que transmiten confianza, estilo y autenticidad.</span>
            </div>
            <div>
                <p class="text-3xl font-bold m-0">Cada rostro cuenta una historia, cada mirada refleja impacto.</p>
                <span class="font-light text-xl m-0">En <strong class="uppercase text-bold">éclat</strong> no mostramos modelos: mostramos experiencias vivas.</span>
            </div>
        </div>

        <div class="uk-position-relative uk-visible-toggle uk-light flex-1/2 p-10" tabindex="-1" uk-slider="center: true">

            <div class="uk-slider-items uk-grid">
                @foreach($servicios as $servicio)
                    <a  class="uk-width-1-2" href="<?= route('servicios.index')?>">
                        <div>
                            <div class="uk-panel uk-card uk-card-default uk-overflow-hidden uk-inline-clip uk-transition-toggle">
                                <img src="{{ asset($servicio->image) }}" alt="{{ $servicio->name }}" width="500" height="300" alt="">
                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
                                    <div class="uk-text-center">
                                        <h3 class="uk-margin-remove">{{ $servicio->name }}</h3>
                                        <p class="uk-margin-remove">{{ $servicio->resume ?? 'Descubre más sobre este servicio.' }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slider-item="next"></a>

        </div>
    </section>

    <section class="mt-10 p-5">
        <div class="cs-line"></div>
        <div class="flex flex-col md:flex-row">
            <div class="w-full flex flex-col justify-center ">
                <h2 class="text-5xl">Por que elegirnos.</h2>
                <span class="text-6xl text-gray-900">El lujo está en los detalles invisibles.</span>
            </div>
            <div class="w-full grid grid-cols-4 grid-rows-4 gap-10">
                <div class="col-span-2 row-span-2 flex flex-col items-center text-center">
                    <span class="mx-auto">{{ svg('ri-chat-follow-up-fill', ['width' => '40', 'height' => '40', 'color' => 'black']) }}</span>
                    <p class="text-gray-500">Selección curada de taletos.</p>
                </div>
                <div class="col-span-2 row-span-2 flex flex-col items-center text-center">
                    <span class="mx-auto">{{ svg('phosphor-strategy-duotone', ['width' => '40', 'height' => '40', 'color' => 'black']) }}</span>
                    <p class="text-gray-500">Estrategias personalizadas según cada marca.</p>
                </div>
                <div class="col-span-2 row-span-2 flex flex-col items-center text-center">
                    <span class="mx-auto">{{ svg('phosphor-selection-plus-fill', ['width' => '40', 'height' => '40', 'color' => 'black']) }}</span>
                    <p class="text-gray-500">Acompañamiento de pricncipio al fin.</p>
                </div>
                <div class="col-span-2 row-span-2 flex flex-col items-center text-center">
                    <span class="mx-auto">{{ svg('bi-camera-video-fill', ['width' => '40', 'height' => '40', 'color' => 'black']) }}</span>
                    <p class="text-gray-500">Un estándar de excelencia editorial.</p>
                </div>
            </div>
        </div>
        <div class="cs-line"></div>
    </section>

        {{-- ******************* Editorial Mood/ Inspirations ******************* --}}
    <section class="p-5">
        <div>
            <h2 class="text-gray-800 font-bold text-4xl m-0">Editorial Mood/ Inspirations</h2>
            <span class="text-gray-800 font-black text-2xl m-0">La moda es instante, <strong class="font-bold uppercase">éclat</strong> lo vuelve eterno.</span>
            <p class="text-gray-800 m-0">Inspiramos con imagenes que no solo venden, sino que <strong>construye legado.</strong> Nuestra inpiración viene de lo urbano, lo artístico y lo humano: tres mundos que se encuentran en cada proyecto.</p>
        </div>

        {{-- ******************* Blog ******************* --}}
        <section class="my-10">
            {{-- Verifica se existe um post para exibir --}}
            @isset($ultimoPost)
                <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                    <div class="uk-card-media-left uk-cover-container">
                        {{-- Imagem do Post --}}
                        <img src="{{ asset($ultimoPost->image) }}" alt="{{ $ultimoPost->name }}" uk-cover>
                        <canvas width="600" height="400"></canvas>
                    </div>
                    <div>
                        <div class="uk-card-body">
                            {{-- Título do Post --}}
                            <h3 class="uk-card-title">{{ $ultimoPost->name }}</h3>
                            {{-- Resumo/Conteúdo do Post --}}
                            <p>{{ $ultimoPost->resume }}</p>
                            {{-- Link para o Post --}}
                            <a href="{{ route('post.show', ['id' => $ultimoPost->id]) }}" class="uk-button uk-button-text">Leer más</a>

                            {{-- Informações Adicionais (Opcional) --}}
                            <p class="uk-text-meta uk-margin-remove-top">
                                Por: {{ $ultimoPost->author }}
                                <time datetime="{{ $ultimoPost->created_at }}">{{ \Carbon\Carbon::parse($ultimoPost->created_at)->translatedFormat('d F Y') }}</time>
                            </p>
                        </div>
                    </div>
                </div>
            @else
                <p>Em breve, um novo artigo inspirador!</p>
            @endisset
            <div class="cs-line"></div>
        </section>

    </section>

    </section>

    <section>

    <div class="grid grid-cols-5 grid-rows-6 gap-4 bg-amber-100">
        <div class="w-full h-full row-span-2 bg-slate-700">1</div>
        <div class="w-full h-full col-span-2 row-span-2 col-start-1 row-start-3 bg-slate-700">2</div>
        <div class="w-full h-full row-span-2 col-start-1 row-start-5 bg-slate-700">3</div>
        <div class="w-full h-full col-span-2 row-span-2 col-start-2 row-start-5 bg-slate-700">4</div>
        <div class="w-full h-full row-span-4 col-start-3 row-start-1 bg-slate-700">5</div>
        <div class="w-full h-full row-span-2 col-start-2 row-start-1 bg-slate-700">6</div>
        <div class="w-full h-full col-span-2 row-span-2 col-start-4 row-start-1 bg-slate-700">7</div>
        <div class="w-full h-full row-span-4 col-start-4 row-start-3 bg-slate-700">8</div>
        <div class="w-full h-full row-span-2 col-start-5 row-start-3 bg-slate-700">9</div>
        <div class="w-full h-full row-span-2 col-start-5 row-start-5 bg-slate-700">10</div>
    </div>

    </section>


<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.23.12/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.23.12/dist/js/uikit-icons.min.js"></script>

</x-layouts.main>

