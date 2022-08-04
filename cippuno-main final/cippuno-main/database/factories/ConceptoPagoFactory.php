<?php

namespace Database\Factories;

use App\Models\Concepto;
use App\Models\Pago;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConceptoPagoFactory extends Factory
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
            'cantidad'=>$this->faker->randomNumber(),
            'precio'=>$this->faker->numberBetween(50,200),
            'pago_id'=>Pago::pluck('id')->random(),
            'concepto_id'=>Concepto::pluck('id')->random(),
        ];
    }
}
