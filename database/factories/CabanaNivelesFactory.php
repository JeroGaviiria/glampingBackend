<?php

namespace Database\Factories;

use App\Models\CabanaNiveles;
use Illuminate\Database\Eloquent\Factories\Factory;

class CabanaNivelesFactory extends Factory
{
    protected $model = CabanaNiveles::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->randomElement(['VIP', 'Estandar', 'Económico']),
            'descripcion' => $this->faker->sentence(),
        ];
    }
}
