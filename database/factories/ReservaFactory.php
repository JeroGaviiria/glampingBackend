<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReservaFactory extends Factory
{
    public function definition()
    {
        return [
            'usuario_id' => \App\Models\Usuario::factory(),
            'cabana_id' => \App\Models\Cabana::factory(),
            'fecha' => $this->faker->date,
        ];
    }
}

