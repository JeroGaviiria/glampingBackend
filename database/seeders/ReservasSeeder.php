<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservasSeeder extends Seeder
{
    public function run()
    {
        DB::table('reservas')->insert([
            ['usuario_id' => 1, 'cabana_id' => 1, 'fecha' => '2024-10-10'],
            ['usuario_id' => 2, 'cabana_id' => 2, 'fecha' => '2024-10-15'],
        ]);
    }
}

