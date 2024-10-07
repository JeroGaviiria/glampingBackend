<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeeder extends Seeder
{
    public function run()
    {
        DB::table('usuarios')->insert([
            ['nombre' => 'Juan Pérez', 'email' => 'juan@example.com', 'password' => bcrypt('password'), 'tipo' => 'cliente'],
            ['nombre' => 'Ana Gómez', 'email' => 'ana@example.com', 'password' => bcrypt('password'), 'tipo' => 'administrador'],
        ]);
    }
}
