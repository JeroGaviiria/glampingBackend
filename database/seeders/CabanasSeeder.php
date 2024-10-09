<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CabanasSeeder extends Seeder
{
    public function run()
    {
        DB::table('cabanas')->insert([
            ['nombre' => 'Cabaña Los Robles', 'aforo' => 4, 'nivel_id' => 1], // VIP
            ['nombre' => 'Cabaña Las Palmas', 'aforo' => 3, 'nivel_id' => 2], // Estándar
            ['nombre' => 'Cabaña La Montaña', 'aforo' => 6, 'nivel_id' => 3], // Económico
        ]);
    }
}
