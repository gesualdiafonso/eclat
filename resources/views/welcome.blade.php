<?php
/**
 * @var \Illuminate\Support\Collection|\App\Models\Servicio[] $servicios
 */
?>

<x-layouts.main>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.23.12/dist/css/uikit.min.css" />

    <section class="">
        <div>
            <h2>
                Acá pensamos en todos los detalles!
            </h2>
            <p>Criar experiencias que reflita el estilo de cada talento en las marcas de un modo simples y singular.</p>
        </div>

        <div class="">
            <p class="">
                Uma agência de modelos não é apenas sobre rostos bonitos. É sobre conectar talento à visão da sua marca, criando campanhas que deixam uma impressão duradoura.
                Cada modelo traz personalidade, presença e estilo, potencializando sua comunicação visual.
                Nosso portfólio de profissionais é selecionado para garantir impacto e autenticidade em cada projeto.
            </p>
        </div>
    </section>

    <section>
        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="center: true">

            <div class="uk-slider-items uk-grid">
                @foreach($servicios as $servicio)
                    <a  class="uk-width-1-3" href="<?= route('servicios.index')?>">
                        <div>
                            <div class="uk-panel uk-card uk-card-default uk-overflow-hidden uk-inline-clip uk-transition-toggle">
                                <img src="{{ asset($servicio->image) }}" alt="{{ $servicio->name }}" width="600" height="400" alt="">
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


<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.23.12/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.23.12/dist/js/uikit-icons.min.js"></script>

</x-layouts.main>

