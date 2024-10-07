<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CabanaServicioFactory extends Factory
{
    public function definition()
    {
        return [
            'cabana_id' => \App\Models\Cabana::factory(),
            'servicio_id' => \App\Models\Servicio::factory(),
        ];
    }
}

