<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $categoria = categoria::class;

    public function definition()
    {
        return [
            'descripcion'=>$this->faker->name,
        ];
    }
}
