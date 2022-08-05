<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PersonaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dni'=>$this->faker->unique()->randomNumber(8,true),
            'nombres'=>$this->faker->firstName(),
            'a_paterno'=>$this->faker->lastName(),
            'a_materno'=>$this->faker->lastName(),
            'email'=>$this->faker->email(),
            'direccion'=>$this->faker->streetAddress(),
        ];
    }
}
