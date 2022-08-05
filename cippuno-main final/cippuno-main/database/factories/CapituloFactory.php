<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CapituloFactory extends Factory
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
            'nombre'=>$this->faker->word(),
        ];
    }
}
