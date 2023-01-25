<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MateriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->sentence(),
            'carrera'=>$this->faker->randomElement(['Sistemas Computacionales','Gestion Empresarial']),
            'semestre'=>$this->faker->randomElement(['Primero','Segundo','Tercero','Cuarto']),
            'instructor'=>$this->faker->name(),
            'descripcion'=>$this->faker->sentence()
        ];
    }
}
