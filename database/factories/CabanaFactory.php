<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CabanaFactory extends Factory
{
    public function definition()
    {
        return [
            'nombre' => $this->faker->word . ' ' . $this->faker->randomElement(['de Montaña', 'del Lago', 'del Bosque']),
            'nivel' => $this->faker->randomElement(['VIP', 'Estándar', 'Económico']),
            'aforo' => $this->faker->numberBetween(2, 10),
        ];
    }
}

