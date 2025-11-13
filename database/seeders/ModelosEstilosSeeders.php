<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelosEstilosSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estilos_modelos')->insert(
            [
                [
                    'modelos_fk' => 1,
                    'estilos_fk' => 1,
                ],
                [
                    'modelos_fk' => 1,
                    'estilos_fk' => 2,
                ],
                [
                    'modelos_fk' => 1,
                    'estilos_fk' => 3,
                ],
                [
                    'modelos_fk' => 1,
                    'estilos_fk' => 5,
                ],
                [
                    'modelos_fk' => 1,
                    'estilos_fk' => 8,
                ],
                [
                    'modelos_fk' => 2,
                    'estilos_fk' => 3,
                ],
                [
                    'modelos_fk' => 2,
                    'estilos_fk' => 2,
                ],
                [
                    'modelos_fk' => 2,
                    'estilos_fk' => 4,
                ],
                [
                    'modelos_fk' => 2,
                    'estilos_fk' => 5,
                ],
                [
                    'modelos_fk' => 2,
                    'estilos_fk' => 7,
                ],
                [
                    'modelos_fk' => 3,
                    'estilos_fk' => 16,
                ],
                [
                    'modelos_fk' => 3,
                    'estilos_fk' => 11,
                ],
                [
                    'modelos_fk' => 3,
                    'estilos_fk' => 8,
                ],
                [
                    'modelos_fk' => 3,
                    'estilos_fk' => 9,
                ],
                [
                    'modelos_fk' => 4,
                    'estilos_fk' => 22,
                ],
                [
                    'modelos_fk' => 4,
                    'estilos_fk' => 23,
                ],
                [
                    'modelos_fk' => 4,
                    'estilos_fk' => 15,
                ],
                [
                    'modelos_fk' => 4,
                    'estilos_fk' => 11,
                ],
                [
                    'modelos_fk' => 4,
                    'estilos_fk' => 7,
                ],
                [
                    'modelos_fk' => 5,
                    'estilos_fk' => 11,
                ],
                [
                    'modelos_fk' => 5,
                    'estilos_fk' => 2,
                ],
                [
                    'modelos_fk' => 5,
                    'estilos_fk' => 19,
                ],
                [
                    'modelos_fk' => 5,
                    'estilos_fk' => 8,
                ],
                [
                    'modelos_fk' => 6,
                    'estilos_fk' => 19,
                ],
                [
                    'modelos_fk' => 6,
                    'estilos_fk' => 2,
                ],
                [
                    'modelos_fk' => 6,
                    'estilos_fk' => 5,
                ],
                [
                    'modelos_fk' => 6,
                    'estilos_fk' => 11,
                ],
                [
                    'modelos_fk' => 6,
                    'estilos_fk' => 10,
                ],
                [
                    'modelos_fk' => 7,
                    'estilos_fk' => 5,
                ],
                [
                    'modelos_fk' => 7,
                    'estilos_fk' => 2,
                ],
                [
                    'modelos_fk' => 7,
                    'estilos_fk' => 8,
                ],
                [
                    'modelos_fk' => 7,
                    'estilos_fk' => 10,
                ],
                [
                    'modelos_fk' => 8,
                    'estilos_fk' => 13,
                ],
                [
                    'modelos_fk' => 8,
                    'estilos_fk' => 12,
                ],
                [
                    'modelos_fk' => 8,
                    'estilos_fk' => 16,
                ],
                [
                    'modelos_fk' => 8,
                    'estilos_fk' => 7,
                ],
                [
                    'modelos_fk' => 9,
                    'estilos_fk' => 15,
                ],
                [
                    'modelos_fk' => 9,
                    'estilos_fk' => 14,
                ],
                [
                    'modelos_fk' => 9,
                    'estilos_fk' => 2,
                ],
                [
                    'modelos_fk' => 9,
                    'estilos_fk' => 8,
                ],
                [
                    'modelos_fk' => 9,
                    'estilos_fk' => 6,
                ],
                [
                    'modelos_fk' => 10,
                    'estilos_fk' => 16,
                ],
                [
                    'modelos_fk' => 10,
                    'estilos_fk' => 1,
                ],
                [
                    'modelos_fk' => 10,
                    'estilos_fk' => 22,
                ],
                [
                    'modelos_fk' => 10,
                    'estilos_fk' => 10,
                ],
                [
                    'modelos_fk' => 10,
                    'estilos_fk' => 10,
                ],
                [
                    'modelos_fk' => 11,
                    'estilos_fk' => 18,
                ],
                [
                    'modelos_fk' => 11,
                    'estilos_fk' => 19,
                ],
                [
                    'modelos_fk' => 11,
                    'estilos_fk' => 20,
                ],
                [
                    'modelos_fk' => 11,
                    'estilos_fk' => 10,
                ],
                [
                    'modelos_fk' => 12,
                    'estilos_fk' => 21,
                ],
                [
                    'modelos_fk' => 12,
                    'estilos_fk' => 19,
                ],
                [
                    'modelos_fk' => 12,
                    'estilos_fk' => 23,
                ],
                [
                    'modelos_fk' => 12,
                    'estilos_fk' => 7,
                ],
            ]
        );
    }
}
