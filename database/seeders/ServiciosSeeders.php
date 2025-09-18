<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ServiciosSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('servicios')->insert([
            [
                'name' => 'Casting exclusivo',
                'slug' => 'casting-exclusivo',
                'image' => 'assets/images/servicios/castingExc.jpg',
                'category' => json_encode(['Casting', 'Producción', 'Gestión de Talento', 'Consultoría de Imagen']),
                'resume' => 'Selección premium de talentos para su marca. Cada modelo es cuidadosamente evaluado para transmitir autenticidad, presencia y estilo. El casting ÉCLAT transforma el proceso de selección en una experiencia refinada y eficiente.',
                'descript' => 'En ÉCLAT, cada casting es una selección de excelencia. Seleccionamos modelos que combinan presencia, estilo y personalidad, creando una experiencia única para su marca.
                                El proceso es minucioso: analizamos los portafolios, la presencia en video y la adecuación al concepto de la campaña, asegurándonos de que cada candidato represente el estándar ÉCLAT.
                                Trabajamos codo a codo con directores de arte y marcas para alinear el casting con el briefing, siempre prestando atención a los detalles que marcan la diferencia en el resultado final.
                                Cada sesión se lleva a cabo de forma elegante y profesional, reflejando la sofisticación que exige la industria de la moda. El objetivo es crear un encuentro entre el talento y las necesidades de la marca de forma natural e impactante.
                                Al final del proceso, su equipo recibe una selección final de modelos cualificados, listos para traducir conceptos en presencia de forma exclusiva.',
                'price' => 2000.00
            ],
            [
                'name' => 'Producción de moda',
                'slug' => 'produccion-de-moda',
                'image' => 'assets/images/servicios/produccionModel.jpg',
                'category' => json_encode(['Producción', 'Casting', 'Gestión de Talento', 'Consultoría de Imagen']),
                'resume' => 'Transformamos ideas en imágenes impactantes. Desde la planificación hasta la ejecución, nuestro equipo maneja cada detalle con precisión y creatividad. La producción ÉCLAT garantiza que cada proyecto de moda se realice con excelencia y estilo.',
                'descript' => 'En ÉCLAT, la producción de moda es una sinfonía de creatividad y organización. Cada proyecto comienza con una comprensión profunda del concepto y los objetivos de la marca.
                                Nuestro equipo trabaja en estrecha colaboración con fotógrafos, estilistas, maquilladores y otros profesionales para asegurar que cada elemento esté alineado con la visión creativa.
                                La logística es manejada con precisión: desde la selección de locaciones hasta la coordinación del equipo, cada detalle es planificado para garantizar una ejecución fluida y eficiente.
                                Durante la producción, mantenemos un ambiente profesional y colaborativo, fomentando la creatividad mientras aseguramos que los plazos y estándares de calidad se cumplan rigurosamente.
                                El resultado final es una serie de imágenes que no solo capturan la esencia de la moda, sino que también cuentan una historia visual poderosa y coherente.',
                'price' => 3000.00
            ],
            [
                'name' => 'Gestión de talento',
                'slug' => 'gestion-de-talento',
                'image' => 'assets/images/servicios/gestionPerfil.jpg',
                'category' => json_encode(['Gestión de Talento', 'Casting', 'Producción', 'Consultoría de Imagen']),
                'resume' => 'Maximizamos el potencial de su talento con estrategias personalizadas. Desde el desarrollo profesional hasta la promoción en el mercado, nuestra gestión integral asegura que cada modelo alcance nuevas alturas en su carrera.',
                'descript' => 'En ÉCLAT, entendemos que el talento es el corazón de la industria de la moda. Nuestra gestión integral está diseñada para maximizar el potencial de cada modelo a través de estrategias personalizadas y apoyo continuo.
                                Trabajamos estrechamente con nuestros talentos para desarrollar sus habilidades, construir su portafolio y posicionarlos estratégicamente en el mercado.
                                Nuestra red de contactos en la industria nos permite abrir puertas a oportunidades exclusivas, desde campañas publicitarias hasta desfiles de moda internacionales.
                                Además, ofrecemos asesoramiento en branding personal y presencia en redes sociales, asegurando que cada modelo no solo destaque por su apariencia, sino también por su profesionalismo y autenticidad.
                                El objetivo es crear carreras sostenibles y exitosas, donde cada talento pueda alcanzar nuevas alturas y dejar una marca duradera en la industria.',
                'price' => 1500.00
            ],

        ]);
    }
}
