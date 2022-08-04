<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ConceptoFactory extends Factory
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
            'nombre'=>$this->faker->sentence(3),
            'precio'=>$this->faker->numberBetween(50,150)
        ];
    }
}
