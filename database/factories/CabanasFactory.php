<?php

namespace Database\Factories;

use App\Models\Cabanas;
use App\Models\CabanaNiveles;
use Illuminate\Database\Eloquent\Factories\Factory;

class CabanasFactory extends Factory
{
    protected $model = Cabanas::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->word(),
            'aforo' => $this->faker->numberBetween(1, 10),
            'nivel_id' => CabanaNiveles::factory(),  // Relación con CabanaNiveles
        ];
    }
}
