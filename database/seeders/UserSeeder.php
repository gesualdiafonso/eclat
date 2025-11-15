<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                [
                    'id' => 1,
                    'name' => 'Admin',
                    'email' => 'admin@eclat.com',
                    'password' => Hash::make('admin123'),
                    'role' => 'admin',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 2,
                    'name' => 'Afonso Arruda Gesualdi',
                    'email' => 'gesualdi@gmail.com',
                    'password' => Hash::make('afonso123'),
                    'role' => 'client',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 3,
                    'name' => 'Lisa Bauer ',
                    'email' => 'lisa@gmail.com',
                    'password' => Hash::make('lisa123'),
                    'role' => 'client',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]
        );
    }
}
