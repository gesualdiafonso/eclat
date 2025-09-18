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
                'name' => 'The new era of minimalism?',
                'slug' => 'New-era-of-minimalism',
                'image' => 'teste',
                'author' => 'ÉCLAT Editorial',
                'category' => 'Tendencias',
                'resume' => 'El minimalismo deja de ser solo estética para convertirse en una declaración de presencia. En la moda contemporánea, lo sencillo trasciende lo básico, revelando poder en cada detalle. ÉCLAT traduce esta tendencia en ensayos que unen silencio visual e impacto emocional. Cada look refleja la belleza de la esencia, nunca del exceso.',
                'content' => 'La moda siempre ha sido un reflejo de la época, y en la actualidad, el minimalismo es más que una elección estilística: es un manifiesto. La mirada editorial sobre esta estética va más allá de la ausencia de adornos, revelando una nueva forma de sofisticación.
                                En ÉCLAT, exploramos el minimalismo como expresión de autenticidad. Cada modelo encarna la fuerza de una presencia que no necesita excesos para afirmarse. Se trata de la claridad de las líneas, la neutralidad que impacta y la narrativa visual que invita a la mirada a descansar en formas puras.
                                En el editorial «La nueva era del minimalismo», creamos composiciones que revelan la delicadeza de lo esencial. Los tejidos fluidos se combinan con siluetas geométricas, y la fotografía traduce la poesía del espacio en blanco. El silencio se convierte en lenguaje.
                                    Así, el minimalismo de ÉCLAT no es ausencia, sino potencia. Es la sofisticación que se revela cuando el exceso da paso a la esencia.'
            ],
            [
                'name' => 'Sostenibilidad en la moda: un compromiso ineludible',
                'slug' => 'Sostenibilidad-en-la-moda',
                'image' => 'teste2',
                'author' => 'ÉCLAT Editorial',
                'category' => 'Sostenibilidad',
                'resume' => 'La sostenibilidad en la moda ya no es una opción, sino una necesidad urgente. En ÉCLAT, creemos que cada elección cuenta y que la industria debe liderar con responsabilidad. Nuestro compromiso se refleja en cada editorial, donde la ética y la estética se entrelazan para crear una narrativa visual que inspira un cambio positivo.',
                'content' => 'La moda sostenible es más que una tendencia pasajera; es un movimiento que redefine los valores de la industria. En ÉCLAT, entendemos que la sostenibilidad implica un enfoque holístico que abarca desde la producción hasta el consumo.
                                En nuestro editorial «Sostenibilidad en la moda: un compromiso ineludible», destacamos marcas y diseñadores que priorizan prácticas responsables. Cada prenda seleccionada refleja un equilibrio entre estilo y ética, demostrando que es posible crear belleza sin comprometer el planeta.
                                La fotografía captura la esencia de esta filosofía, utilizando escenarios naturales y materiales orgánicos para resaltar la conexión entre la moda y el entorno. Cada imagen cuenta una historia de respeto por los recursos y aprecio por la artesanía.
                                En ÉCLAT, creemos que la moda sostenible es el futuro. A través de nuestros editoriales, buscamos inspirar a nuestra audiencia a tomar decisiones conscientes, promoviendo un cambio positivo en la industria y en el mundo.'
            ],
            [
                'name' => 'El Brillo de la Autenticidad',
                'slug' => 'El-Brillo-de-la-Autenticidad',
                'image' => 'teste3',
                'author' => 'ÉCLAT Studio',
                'category' => 'Editorial',
                'resume' => 'En un mundo saturado de imágenes y tendencias efímeras, la autenticidad emerge como el verdadero lujo. En ÉCLAT, celebramos la individualidad y la esencia única de cada persona. Nuestro editorial «El Brillo de la Autenticidad» es un homenaje a aquellos que se atreven a ser ellos mismos, reflejando una belleza que trasciende lo superficial.',
                'content' => 'La autenticidad es la nueva elegancia. En ÉCLAT, creemos que la verdadera belleza radica en la capacidad de ser uno mismo, sin máscaras ni artificios. Nuestro editorial «El Brillo de la Autenticidad» captura esta esencia a través de una serie de imágenes que celebran la diversidad y la individualidad.
                                Cada modelo seleccionado para este proyecto representa una historia única, una personalidad que brilla con luz propia. La fotografía busca resaltar estas cualidades, utilizando iluminación natural y composiciones que enfatizan la conexión entre el sujeto y su entorno.
                                La moda en este editorial no es solo un accesorio, sino una extensión de la identidad de cada persona. Las prendas elegidas reflejan estilos personales y narrativas individuales, creando un diálogo visual que invita a la reflexión sobre lo que significa ser auténtico en un mundo lleno de expectativas.
                                En ÉCLAT, creemos que la autenticidad es el camino hacia una belleza duradera y significativa. A través de este editorial, esperamos inspirar a nuestra audiencia a abrazar su verdadera esencia y a encontrar el brillo que reside en ser uno mismo.'
            ]
        ]);
    }
}
