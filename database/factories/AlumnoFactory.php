<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $alumno = alumno::class;

    public function definition()
    {
        return [
            'carne'=>rand(1,20),
            'nombre'=>$this->faker->name,
            'alias'=>$this->faker->username,
            'foto'=>$this->faker->url,
            'correo'=>$this->faker->unique()->safeEmail,
            'fecha_nacimiento'=>$this->faker->date,
            'telefono'=>$this->faker->phoneNumber,
            'fk_id_categoria'=>rand(1,10),
            
        ];
    }
}
