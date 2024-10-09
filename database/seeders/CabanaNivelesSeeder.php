<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CabanaNivelesSeeder extends Seeder
{
    public function run()
    {
        DB::table('cabana_niveles')->insert([
            ['nombre' => 'VIP', 'descripcion' => 'Nivel de lujo con servicios premium.'],
            ['nombre' => 'Estándar', 'descripcion' => 'Nivel estándar con servicios básicos.'],
            ['nombre' => 'Económico', 'descripcion' => 'Nivel económico para presupuestos ajustados.'],
        ]);
    }
}
