<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TokenFactory extends Factory
{
    public function definition()
    {
        return [
            'usuario_id' => \App\Models\Usuario::factory(),
            'token' => $this->faker->sha256,
            'created_at' => now(),
        ];
    }
}

