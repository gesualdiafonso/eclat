<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ModelosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('modelos')->insert([
            [
                'name' => 'Andressa Viena',
                'image' => 'assets/images/modelos_eclat/andressa.jpg',
                'ubicacion' => 'Buenos Aires, Capital Federal, Argentina',
                'ojos' => 'Negros',
                'altura' => 1.85,
                'cabello' => 'Negro',
                'fecha_nacimiento' => \Carbon\Carbon::createFromFormat('d/m/Y', '10/04/1997')->format('Y-m-d'),
                'description' => '
                            Elegância contemporânea com beleza clássica. Pele impecável, traços finos e olhar confiante. Ideal para campanhas de beleza de luxo, maquiagem e editoriais sofisticados.
                            <ul>
                                <li><strong>Estilo:</strong> Elegância atemporal, refinada e poderosa.</li>
                                <li><strong>Trazos marcantes:</strong> Pele luminosa impecável, olhos expressivos, lábios definidos, rosto harmônico.</li>
                                <li><strong>Personalidad que transmite:</strong> Confiança, sofisticação e magnetismo.</li>
                                <li><strong>Campañas de destaque:</strong> Beleza de luxo, skincare premium, maquiagem de alta moda, joalheria e editoriais editoriais de moda conceitual.</li>
                                <li><strong>Fuerza visual:</strong> A capacidade de sustentar closes intensos, com apelo publicitário para marcas que buscam impacto imediato.</li>
                            </ul>
                            ',
            ],
            [
                'name' => 'Juan Díaz',
                'image' => 'assets/images/modelos_eclat/juan.jpg',
                'ubicacion' => 'Rawson, Chubut, Argentina',
                'ojos' => 'Verde Oliva',
                'altura' => 1.90,
                'cabello' => 'Castaño Oscuro',
                'fecha_nacimiento' => \Carbon\Carbon::createFromFormat('d/m/Y', '29/09/1999')->format('Y-m-d'),
                'description' => 'Perfil sério, presença magnética e postura refinada. Combina perfeitamente com moda masculina premium, ternos, campanhas de lifestyle urbano e editoriais cosmopolitas.
                            <ul>
                                <li><strong>Estilo:</strong> Urbano, sofisticado e versátil.</li>
                                <li><strong>Trazos marcantes:</strong> Linha do maxilar definida, barba sutil, porte atlético, olhar contemplativo.</li>
                                <li><strong>Personalidad que transmite:</strong> Determinação, charme discreto e inteligência.</li>
                                <li><strong>Campañas de destaque:</strong>  Moda masculina premium, ternos, alfaiataria, campanhas de relógios e lifestyle urbano sofisticado.</li>
                                <li><strong>Fuerza visual:</strong> Perfeito para representar o homem cosmopolita, focado e contemporâneo.</li>
                            </ul>',
            ],
            [
                'name' => 'Paula Olegari',
                'image' => 'assets/images/modelos_eclat/paula.jpg',
                'ubicacion' => 'Rosario, Santa Fe, Argentina',
                'ojos' => 'Ambar',
                'altura' => 1.78,
                'cabello' => 'Rubio Oscuro',
                'fecha_nacimiento' => \Carbon\Carbon::createFromFormat('d/m/Y', '24/02/1998')->format('Y-m-d'),
                'description' => 'Postura delicada, expressão introspectiva e estilo clean. Representa autenticidade e leveza, excelente para editoriais minimalistas, marcas de moda sustentável e campanhas intimistas.
                            <ul>
                                <li><strong>Estilo:</strong> Minimalista, introspectiva e autêntica.</li>
                                <li><strong>Trazos marcantes:</strong> Cabelos cacheados soltos, pele clara natural, silhueta elegante.</li>
                                <li><strong>Personalidad que transmite:</strong> Delicadeza, autenticidade e introspecção.</li>
                                <li><strong>Campañas de destaque:</strong>  Moda sustentável, editoriais de lifestyle clean, marcas conceituais, beleza natural.</li>
                                <li><strong>Fuerza visual:</strong> Capacidade de transmitir pureza e autenticidade em ambientes simples ou editoriais intimistas.</li>
                            </ul>
                ',
            ],
            [
                'name' => 'Lucas Fernandez',
                'image' => 'assets/images/modelos_eclat/lucas.jpg',
                'ubicacion' => 'Córdoba, Córdoba, Argentina',
                'ojos' => 'Negros',
                'altura' => 1.88,
                'cabello' => 'Castaño',
                'fecha_nacimiento' => \Carbon\Carbon::createFromFormat('d/m/Y', '20/10/2000')->format('Y-m-d'),
                'description' => 'Atitude descolada, visual streetwear e presença cool. Ótimo para campanhas jovens, moda alternativa, editoriais de street style e publicidade voltada ao público criativo.
                            <ul>
                                <li><strong>Estilo:</strong> Streetwear, rebelde e criativo.</li>
                                <li><strong>Trazos marcantes:</strong> Postura despojada, cabelo volumoso, óculos futuristas, atitude cool.</li>
                                <li><strong>Personalidad que transmite:</strong> Liberdade, ousadia e vanguarda.</li>
                                <li><strong>Campañas de destaque:</strong>  Moda urbana, editoriais de tendências jovens, street style, marcas alternativas e campanhas digitais.</li>
                                <li><strong>Fuerza visual:</strong> Representa o jovem contemporâneo, irreverente e conectado com a cultura pop.</li>
                            </ul>
                ',
            ],
            [
                'name' => 'Victoria Bithencurt',
                'image' => 'assets/images/modelos_eclat/victoria.jpg',
                'ubicacion' => 'Olivos, Buenos Aires, Argentina',
                'ojos' => 'Verdes',
                'altura' => 1.80,
                'cabello' => 'Pelirroja',
                'fecha_nacimiento' => \Carbon\Carbon::createFromFormat('d/m/Y', '14/11/1996')->format('Y-m-d'),
                'description' => 'Olhar doce, sorriso suave e carisma natural. A estética leve e colorida combina com campanhas de moda feminina, verão, lifestyle tropical e beleza natural.
                            <ul>
                                <li><strong>Estilo:</strong> Feminino, carismático e natural.</li>
                                <li><strong>Trazos marcantes:</strong> Cabelos longos ruivos, olhos claros, sorriso sutil, pele radiante.</li>
                                <li><strong>Personalidad que transmite:</strong>  Alegria, calor humano e proximidade.</li>
                                <li><strong>Campañas de destaque:</strong>  Moda feminina colorida, lifestyle tropical, campanhas de verão, cosméticos e moda casual.</li>
                                <li><strong>Fuerza visual:</strong> Brilho natural que conecta facilmente com o público, passando frescor e acessibilidade.</li>
                            </ul>
                ',
            ],
            [
                'name' => 'Francisco Gómez',
                'image' => 'assets/images/modelos_eclat/francisco.jpg',
                'ubicacion' => 'Neuquén, Neuquén, Argentina',
                'ojos' => 'Ambar',
                'altura' => 1.80,
                'cabello' => 'Negros',
                'fecha_nacimiento' => \Carbon\Carbon::createFromFormat('d/m/Y', '10/04/1998')->format('Y-m-d'),
                'description' => 'Traços fortes, olhar profundo e presença dramática. Excelente para editoriais de moda em preto e branco, campanhas conceituais, moda alternativa e publicidade de impacto artístico.
                            <ul>
                                <li><strong>Estilo:</strong> Dramático, sofisticado e conceitual.</li>
                                <li><strong>Trazos marcantes:</strong> Cabelos ondulados, olhar penetrante, presença forte em preto e branco.</li>
                                <li><strong>Personalidad que transmite:</strong> Intensidade, mistério e profundidade artística.</li>
                                <li><strong>Campañas de destaque:</strong> Editorial conceitual, moda alternativa, campanhas de alta costura, publicidade artística.</li>
                                <li><strong>Fuerza visual:</strong> Ideal para marcas que buscam expressividade dramática e imagens memoráveis.</li>
                            </ul>',
            ],
            [
                'name' => 'Valentina Rossì',
                'image' => 'assets/images/modelos_eclat/valentina.jpg',
                'ubicacion' => 'Rosario, Santa Fe, Argentina',
                'ojos' => 'Castaños Claros',
                'altura' => 1.75,
                'cabello' => 'Castaños',
                'fecha_nacimiento' => \Carbon\Carbon::createFromFormat('d/m/Y', '10/04/1997')->format('Y-m-d'),
                'description' => 'Traços fortes, olhar profundo e presença dramática. Excelente para editoriais de moda em preto e branco, campanhas conceituais, moda alternativa e publicidade de impacto artístico.
                            <ul>
                                <li><strong>Estilo:</strong> Glamouroso, elegante y sofisticado, con un aire de red carpet.</li>
                                <li><strong>Trazos marcantes:</strong> Líneas fluidas, corte asimétrico con abertura lateral que resalta movimiento y feminidad.</li>
                                <li><strong>Personalidad que transmite:</strong> Confianza, sensualidad discreta y poder femenino.</li>
                                <li><strong>Campañas de destaque:</strong> Moda de lujo, editoriales de alta costura, marcas premium de gala.</li>
                                <li><strong>Fuerza visual:</strong> Impacta por el brillo y dramatismo del vestido en contraste con la pose dinámica.</li>
                            </ul>',
            ],
            [
                'name' => 'Jose Bianchi',
                'image' => 'assets/images/modelos_eclat/jose.jpg',
                'ubicacion' => 'Buenos Aires, Capital Federal, Argentina',
                'ojos' => 'Morones',
                'altura' => 1.90,
                'cabello' => 'Castaño Oscuro',
                'fecha_nacimiento' => \Carbon\Carbon::createFromFormat('d/m/Y', '10/04/1996')->format('Y-m-d'),
                'description' => 'Traços fortes, olhar profundo e presença dramática. Excelente para editoriais de moda em preto e branco, campanhas conceituais, moda alternativa e publicidade de impacto artístico.
                            <ul>
                                <li><strong>Estilo:</strong> Casual clásico con un giro moderno.</li>
                                <li><strong>Trazos marcantes:</strong> Estilo atemporal, sonrisa fresca y natural.</li>
                                <li><strong>Personalidad que transmite:</strong> Cercanía, autenticidad y optimismo juvenil.</li>
                                <li><strong>Campañas de destaque:</strong> Moda urbana, lifestyle, marcas de ropa masculina y fragancias.</li>
                                <li><strong>Fuerza visual:</strong> Su expresión abierta y espontánea genera conexión inmediata.</li>
                            </ul>',
            ],
            [
                'name' => 'Camila Sánchez',
                'image' => 'assets/images/modelos_eclat/camila.jpg',
                'ubicacion' => 'Bahía Blanca, Buenos Aires, Argneinta',
                'ojos' => 'Negros',
                'altura' => 1.80,
                'cabello' => 'Negros',
                'fecha_nacimiento' => \Carbon\Carbon::createFromFormat('d/m/Y', '10/04/1995')->format('Y-m-d'),
                'description' => 'Traços fortes, olhar profundo e presença dramática. Excelente para editoriais de moda em preto e branco, campanhas conceituais, moda alternativa e publicidade de impacto artístico.
                            <ul>
                                <li><strong>Estilo:</strong> Audaz, salvaje y sofisticado.</li>
                                <li><strong>Trazos marcantes:</strong> Mirada calida y fuerte, cuerpo marcante y simples, postura elegante.</li>
                                <li><strong>Personalidad que transmite:</strong> Valentía, seguridad y magnetismo.</li>
                                <li><strong>Campañas de destaque:</strong> Alta moda, editoriales de lujo, marcas con actitud irreverente.</li>
                                <li><strong>Fuerza visual:</strong> La intensidad del animal print enmarcado por el fondo natural potencia la fuerza de su mirada.</li>
                            </ul>',
            ],
            [
                'name' => 'Dylan Rodríguez',
                'image' => 'assets/images/modelos_eclat/dylan.jpg',
                'ubicacion' => 'Buenos Aires, Capital Federal, Argentina',
                'ojos' => 'Negros',
                'altura' => 1.95,
                'cabello' => 'Negros',
                'fecha_nacimiento' => \Carbon\Carbon::createFromFormat('d/m/Y', '10/04/1996')->format('Y-m-d'),
                'description' => 'Traços fortes, olhar profundo e presença dramática. Excelente para editoriais de moda em preto e branco, campanhas conceituais, moda alternativa e publicidade de impacto artístico.
                            <ul>
                                <li><strong>Estilo:</strong> Minimalista y urbano, con influencia streetwear.</li>
                                <li><strong>Trazos marcantes:</strong> Silueta amplia, monocromía, actitud relajada.</li>
                                <li><strong>Personalidad que transmite:</strong> Frescura, modernidad y un aire introspectivo.</li>
                                <li><strong>Campañas de destaque:</strong> Moda urbana, colecciones cápsula de streetwear, marcas sostenibles.</li>
                                <li><strong>Fuerza visual:</strong> La pureza del look monocromático transmite calma y sofisticación.</li>
                            </ul>',
            ],
            [
                'name' => 'Sofia Ricci',
                'image' => 'assets/images/modelos_eclat/sofia.jpg',
                'ubicacion' => 'Mendonza, Mendonza, Argentina',
                'ojos' => 'Azules',
                'altura' => 1.90,
                'cabello' => 'Rubio',
                'fecha_nacimiento' => \Carbon\Carbon::createFromFormat('d/m/Y', '10/04/1994')->format('Y-m-d'),
                'description' => 'Traços fortes, olhar profundo e presença dramática. Excelente para editoriais de moda em preto e branco, campanhas conceituais, moda alternativa e publicidade de impacto artístico.
                            <ul>
                                <li><strong>Estilo:</strong> Haute couture, teatral y etéreo..</li>
                                <li><strong>Trazos marcantes:</strong> Cuerpo en formato escultural intenso, miradas marcantes, atitude fuerte y determinada.</li>
                                <li><strong>Personalidad que transmite:</strong> Misticismo, audacia artística y magnetismo escénico.</li>
                                <li><strong>Campañas de destaque:</strong> Pasarelas de alta moda, editoriales conceptuales, marcas exclusivas.</li>
                                <li><strong>Fuerza visual:</strong> El dramatismo del diseño junto al gesto coreográfico la convierten en un ícono visual.</li>
                            </ul>',
            ],
            [
                'name' => 'Emanuel Hernández',
                'image' => 'assets/images/modelos_eclat/emanuel.jpg',
                'ubicacion' => 'Quilmes, Buenos Aires, Argentina',
                'ojos' => 'Negros',
                'altura' => 1.85,
                'cabello' => 'Rubio',
                'fecha_nacimiento' => \Carbon\Carbon::createFromFormat('d/m/Y', '10/04/1997')->format('Y-m-d'),
                'description' => 'Traços fortes, olhar profundo e presença dramática. Excelente para editoriais de moda em preto e branco, campanhas conceituais, moda alternativa e publicidade de impacto artístico.
                            <ul>
                                <li><strong>Estilo:</strong> Alternativo, artístico y rebelde.</li>
                                <li><strong>Trazos marcantes:</strong> Mirada intensa, tatuaje visible, estética en blanco y negro que realza fuerza emocional.</li>
                                <li><strong>Personalidad que transmite:</strong> Profundidad, misterio y un aire provocador.</li>
                                <li><strong>Campañas de destaque:</strong> Moda alternativa, campañas de joyería, marcas de identidad fuerte.</li>
                                <li><strong>Fuerza visual:</strong> Su expresión desafiante y el contraste en blanco y negro generan una narrativa poderosa.</li>
                            </ul>',
            ],
        ]);
    }
}
