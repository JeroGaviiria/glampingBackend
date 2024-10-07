<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UsuariosSeeder::class,
            CabanasSeeder::class,
            ServiciosSeeder::class,
            CabanaServiciosSeeder::class,
            ReservasSeeder::class,
            TokensSeeder::class,
        ]);
    }
}
