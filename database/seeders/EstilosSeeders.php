<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstilosSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estilos')->insert([
            [
                'estilos_id' => 1,
                'name' => 'Atemporal'
            ],
            [
                'estilo_id' => 2,
                'name' => 'Sofisticado'
            ],
            [
                'estilos_id' => 3,
                'name' => 'Urbano'
            ],
            [
                'estilos_id' => 4,
                'name' => 'Vertsatil'
            ],
            [
                'estilos_id' => 5,
                'name' => 'Luxuoso'
            ],
            [
                'estilos_id' => 6,
                'name' => 'Criativo'
            ],
            [
                'estilo_id' => 7,
                'name' => 'Masculino'
            ],
            [
                'estilos_id' => 8,
                'name' => 'Feminino'
            ],
            [
                'estilos_id' => 9,
                'name' => 'Natural'
            ],
            [
                'estilos_id' => 10,
                'name' => 'Fluído'
            ],
            [
                'estilos_id' => 11,
                'name' => 'Conceitual'
            ],
            [
                'estilos_id' => 12,
                'name' => 'Casual'
            ],
            [
                'estilos_id' => 13,
                'name' => 'Clásico'
            ],
            [
                'estilos_id' => 14,
                'name' => 'Moderno'
            ],
            [
                'estilos_id' => 15,
                'name' => 'Selvaje'
            ],
            [
                'estilos_id' => 16,
                'name' => 'Minimalismo'
            ],
            [
                'estilos_id' => 17,
                'name' => 'Old Money'
            ],
            [
                'estilos_id' => 18,
                'name' => 'Haute Couture'
            ],
            [
                'estilos_id' => 19,
                'name' => 'Teatral'
            ],
            [
                'estilos_id' => 20,
                'name' => 'Etéreo'
            ],
            [
                'estilos_id' => 21,
                'name' => 'Alternativo'
            ],
            [
                'estilos_id' => 22,
                'name' => 'Streetwear'
            ],
            [
                'estilos_id' => 23,
                'name' => 'Rebelde'
            ]
        ]);
    }
}
