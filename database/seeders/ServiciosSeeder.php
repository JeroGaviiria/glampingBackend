<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiciosSeeder extends Seeder
{
    public function run()
    {
        DB::table('servicios')->insert([
            ['nombre' => 'Desayuno'],
            ['nombre' => 'Masaje'],
        ]);
    }
}

