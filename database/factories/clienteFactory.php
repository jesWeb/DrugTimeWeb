<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class clienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nombre' => fake()->name(),
            'sexo' => fake()->randomElement(['Mujer','Hombre']),
            'peso' => 23.4,
            'fechaN' => 23,
            'direccion' => fake()->sentence(),
            'Enfermedad-c' => "si tengo ",
            'imagenU'=>55,
            'telefono'=>5573742881
            ,
            'email' => fake()->unique()->safeEmail(),
            'password' => fake()->unique()->sentence()
        ];
    }
}
