<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\ServiciosSeeder;
use Database\Seeders\ModelosSeeder;
use Database\Seeders\PostSeeders;
use Illuminate\Database\Seeder;
use Database\Seeders\CategoriasSeeders;
use Database\Seeders\EstilosSeeders;
use Database\Seeders\ModelosEstilosSeeders;
use Database\Seeders\UserSeeder;
use Database\Seeders\PedidosSeeder;
use Database\Seeders\PedidosModelosServiciosSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            ServiciosSeeders::class,
            CategoriasSeeders::class,
            PostSeeders::class,
            ModelosSeeder::class,
            EstilosSeeders::class,
            ModelosEstilosSeeders::class,
            UserSeeder::class,
            PedidosSeeder::class,
            PedidosModelosServiciosSeeder::class,
        ]);
    }
}
