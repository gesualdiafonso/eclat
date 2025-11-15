<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PedidosSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('pedidos')->insert([
            [
                'user_id' => 2, // Afonso
                'status' => 'pendiente',
                'notes' => 'Pedido inicial de prueba.',
                'created_at' => now()->subDays(4),
                'updated_at' => now()->subDays(4),
            ],
            [
                'user_id' => 2, // Afonso
                'status' => 'completado',
                'notes' => 'Evento corporativo.',
                'created_at' => now()->subDays(2),
                'updated_at' => now()->subDays(2),
            ],
            [
                'user_id' => 3, // Lisa
                'status' => 'pendiente',
                'notes' => 'Producción fotográfica.',
                'created_at' => now()->subDays(1),
                'updated_at' => now()->subDays(1),
            ],
            [
                'user_id' => 3, // Lisa
                'status' => 'cancelado',
                'notes' => 'Cancelación por reprogramación.',
                'created_at' => now()->subHours(12),
                'updated_at' => now()->subHours(12),
            ]
        ]);
    }
}
