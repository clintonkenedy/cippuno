<?php

namespace Database\Factories;

use App\Models\Capitulo;
use Illuminate\Database\Eloquent\Factories\Factory;

class ColegiadoFactory extends Factory
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
            'nombres'=>$this->faker->name(),
            'codigo_colegiado'=>$this->faker->unique()->randomNumber(6,true),
            'dni'=>$this->faker->unique()->randomNumber(8,true),
            'a_paterno'=>$this->faker->lastName(),
            'a_materno'=>$this->faker->lastName(),
            'direccion'=>$this->faker->streetAddress(),
            'ultimo_pago'=>$this->faker->date(),
            'capitulo_id'=>Capitulo::pluck('id')->random(),
        ];
    }
}
