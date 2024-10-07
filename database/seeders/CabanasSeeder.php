<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CabanasSeeder extends Seeder
{
    public function run()
    {
        DB::table('cabanas')->insert([
            ['nombre' => 'Cabaña de Montaña', 'nivel' => 'VIP', 'aforo' => 4],
            ['nombre' => 'Cabaña del Lago', 'nivel' => 'Estándar', 'aforo' => 6],
        ]);
    }
}


