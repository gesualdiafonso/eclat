<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categoria')->insert(
            [
                [
                    'categoria_id' => 1,
                    'name' => 'LifeStyles'
                ],
                [
                    'categoria_id' => 2,
                    'name' => 'Moda'
                ],
                [
                    'categoria_id' => 3,
                    'name' => 'Editorial'
                ]
            ]
            );
    }
}
