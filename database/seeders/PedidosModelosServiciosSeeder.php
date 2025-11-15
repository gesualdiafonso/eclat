<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PedidosModelosServiciosSeeder extends Seeder
{
    public function run(): void
    {
        /** -----------------------------
         *  MODELOS CONTRATADOS
         * ------------------------------ */

        DB::table('pedidos_modelos')->insert([
            // Pedido 1 - Afonso
            [
                'pedido_id' => 1,
                'modelo_id' => 1,
                'quantity' => 1,
                'created_at' => now()->subDays(4),
                'updated_at' => now()->subDays(4),
            ],
            [
                'pedido_id' => 1,
                'modelo_id' => 4,
                'quantity' => 2,
                'created_at' => now()->subDays(4),
                'updated_at' => now()->subDays(4),
            ],

            // Pedido 2 - Afonso
            [
                'pedido_id' => 2,
                'modelo_id' => 2,
                'quantity' => 1,
                'created_at' => now()->subDays(2),
                'updated_at' => now()->subDays(2),
            ],

            // Pedido 3 - Lisa
            [
                'pedido_id' => 3,
                'modelo_id' => 3,
                'quantity' => 1,
                'created_at' => now()->subDays(1),
                'updated_at' => now()->subDays(1),
            ],

            // Pedido 4 - Lisa
            [
                'pedido_id' => 4,
                'modelo_id' => 5,
                'quantity' => 1,
                'created_at' => now()->subHours(12),
                'updated_at' => now()->subHours(12),
            ],
        ]);

        /** -----------------------------
         *  SERVICIOS CONTRATADOS
         * ------------------------------ */

        DB::table('pedidos_servicio')->insert([
            // Pedido 1 - Afonso
            [
                'pedido_id' => 1,
                'servicio_id' => 1,
                'quantity' => 1,
                'created_at' => now()->subDays(4),
                'updated_at' => now()->subDays(4),
            ],

            // Pedido 2 - Afonso
            [
                'pedido_id' => 2,
                'servicio_id' => 2,
                'quantity' => 1,
                'created_at' => now()->subDays(2),
                'updated_at' => now()->subDays(2),
            ],
            [
                'pedido_id' => 2,
                'servicio_id' => 4,
                'quantity' => 1,
                'created_at' => now()->subDays(2),
                'updated_at' => now()->subDays(2),
            ],

            // Pedido 3 - Lisa
            [
                'pedido_id' => 3,
                'servicio_id' => 3,
                'quantity' => 1,
                'created_at' => now()->subDays(1),
                'updated_at' => now()->subDays(1),
            ],

            // Pedido 4 - Lisa
            [
                'pedido_id' => 4,
                'servicio_id' => 5,
                'quantity' => 1,
                'created_at' => now()->subHours(12),
                'updated_at' => now()->subHours(12),
            ],
        ]);
    }
}
