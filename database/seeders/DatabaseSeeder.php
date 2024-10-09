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
            ServiciosSeeder::class,
            CabanaNivelesSeeder::class, 
            CabanasSeeder::class,
            CabanaServiciosSeeder::class,
            ReservasSeeder::class,
            TokensSeeder::class,
        ]);
    }
}
