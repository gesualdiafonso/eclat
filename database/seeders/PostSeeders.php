<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('post')->insert([
            [
                'categoria_fk' => 1,
                'name' => 'The new era of minimalism?',
                'slug' => 'New-era-of-minimalism',
                'image' => 'assets/images/posts/minimalist.jpg',
                'author' => 'ÉCLAT Editorial',
                'resume' => 'El minimalismo deja de ser solo estética para convertirse en una declaración de presencia. En la moda contemporánea, lo sencillo trasciende lo básico, revelando poder en cada detalle. ÉCLAT traduce esta tendencia en ensayos que unen silencio visual e impacto emocional. Cada look refleja la belleza de la esencia, nunca del exceso.',
                'content' => 'La moda siempre ha sido un reflejo de la época, y en la actualidad, el minimalismo es más que una elección estilística: es un manifiesto. La mirada editorial sobre esta estética va más allá de la ausencia de adornos, revelando una nueva forma de sofisticación.
                                En ÉCLAT, exploramos el minimalismo como expresión de autenticidad. Cada modelo encarna la fuerza de una presencia que no necesita excesos para afirmarse. Se trata de la claridad de las líneas, la neutralidad que impacta y la narrativa visual que invita a la mirada a descansar en formas puras.
                                En el editorial «La nueva era del minimalismo», creamos composiciones que revelan la delicadeza de lo esencial. Los tejidos fluidos se combinan con siluetas geométricas, y la fotografía traduce la poesía del espacio en blanco. El silencio se convierte en lenguaje.
                                    Así, el minimalismo de ÉCLAT no es ausencia, sino potencia. Es la sofisticación que se revela cuando el exceso da paso a la esencia.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categoria_fk' => 2,
                'name' => 'Revolución de los Estilos Urbanizados',
                'slug' => 'revolución-del-estilo-urbano',
                'image' => 'assets/images/posts/estiloUrbano.jpg',
                'author' => 'ÉCLAT Editorial',
                'resume' => 'Lo urbano no es solo un escenario, sino un lenguaje. En las calles, la moda encuentra una energía cruda, espontánea y vibrante. ÉCLAT transforma este movimiento en narrativas visuales que reflejan actitud, juventud y audacia. La ciudad respira estilo, y cada esquina es un escenario.',
                'content' => 'O estilo urbano nunca esteve tão presente no discurso da moda. Ele transcende o streetwear e se consolida como estética de atitude. É o reflexo de uma geração que habita metrópoles em movimento, buscando identidade em meio ao caos organizado.
                                A ÉCLAT interpreta essa revolução em um editorial onde a cidade é palco e personagem. Paredes grafitadas, luzes de néon e sombras arquitetônicas se tornam parte da narrativa visual. A moda urbana não é sobre roupas, mas sobre presença.
                                Tecidos utilitários, cortes assimétricos e combinações ousadas traduzem a energia de quem veste liberdade. O urbano é força, é rebeldia sofisticada.
                                Nesse manifesto visual, a ÉCLAT mostra que estilo não se prende a passarelas. Ele pulsa nas ruas, no ritmo de quem faz da cidade um eterno editorial.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categoria_fk' => 3,
                'name' => 'El Brillo de la Autenticidad',
                'slug' => 'El-Brillo-de-la-Autenticidad',
                'image' => 'assets/images/posts/autenticidad.jpg',
                'author' => 'ÉCLAT Studio',
                'resume' => 'En un mundo saturado de imágenes y tendencias efímeras, la autenticidad emerge como el verdadero lujo. En ÉCLAT, celebramos la individualidad y la esencia única de cada persona. Nuestro editorial «El Brillo de la Autenticidad» es un homenaje a aquellos que se atreven a ser ellos mismos, reflejando una belleza que trasciende lo superficial.',
                'content' => 'La autenticidad es la nueva elegancia. En ÉCLAT, creemos que la verdadera belleza radica en la capacidad de ser uno mismo, sin máscaras ni artificios. Nuestro editorial «El Brillo de la Autenticidad» captura esta esencia a través de una serie de imágenes que celebran la diversidad y la individualidad.
                                Cada modelo seleccionado para este proyecto representa una historia única, una personalidad que brilla con luz propia. La fotografía busca resaltar estas cualidades, utilizando iluminación natural y composiciones que enfatizan la conexión entre el sujeto y su entorno.
                                La moda en este editorial no es solo un accesorio, sino una extensión de la identidad de cada persona. Las prendas elegidas reflejan estilos personales y narrativas individuales, creando un diálogo visual que invita a la reflexión sobre lo que significa ser auténtico en un mundo lleno de expectativas.
                                En ÉCLAT, creemos que la autenticidad es el camino hacia una belleza duradera y significativa. A través de este editorial, esperamos inspirar a nuestra audiencia a abrazar su verdadera esencia y a encontrar el brillo que reside en ser uno mismo.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categoria_fk' => 1,
                'name' => 'Belleza en movimiento?',
                'slug' => 'belleza-movimiento',
                'image' => 'assets/images/posts/bellezamov.jpg',
                'author' => 'ÉCLAT Studio',
                'resume' => 'El futuro de la estética es dinámico. La belleza no es estática, sino viva, en constante transformación. En ÉCLAT, exploramos el movimiento como narrativa visual, transformando cada gesto en expresión artística. La moda se convierte en danza, poesía, respiración.',
                'content' => 'La belleza es más que imagen: es movimiento. El editorial «Belleza en movimiento» se sumerge en esta idea, donde la moda se revela en transiciones sutiles, gestos espontáneos y fluidez ininterrumpida.
                                La estética editorial de ÉCLAT transforma cada clic en un fragmento coreográfico. Tejidos ligeros y estructurados dialogan con cuerpos en acción, revelando cómo el dinamismo potencia la emoción estética.
                                La fotografía captura no solo poses, sino también respiraciones. Cada mirada, cada desplazamiento, es parte de una narrativa viva. El movimiento aporta vulnerabilidad y fuerza al mismo tiempo.
                                Este editorial celebra lo efímero. Porque la belleza no necesita durar para ser memorable. Solo necesita ser sentida. Y cuando se mueve, es eterna.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
