<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('plants')->insert([
            [
                'name' => 'Snake Plant',
                'species' => 'Sansevieria trifasciata',
                'care_instructions' => 'Water lightly every 2-3 weeks. Thrives in low light.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Aloe Vera',
                'species' => 'Aloe barbadensis',
                'care_instructions' => 'Water deeply but infrequently. Needs bright, indirect sunlight.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Monstera',
                'species' => 'Monstera deliciosa',
                'care_instructions' => 'Water once a week. Loves humidity and indirect light.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
