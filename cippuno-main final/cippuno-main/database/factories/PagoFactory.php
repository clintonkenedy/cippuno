<?php

namespace Database\Factories;

use App\Models\Colegiado;
use App\Models\Forma_pago;
use App\Models\Persona;
use App\Models\Sede;
use Illuminate\Database\Eloquent\Factories\Factory;

class PagoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $num = $this->faker->numberBetween(0,1);
        if ($num==0){
            return [
                'numero'=>$this->faker->unique()->randomNumber(7,true),
                'observaciones'=>$this->faker->paragraph(),
                'colegiado_id'=>Colegiado::pluck('id')->random(),
                'sede_id'=>Sede::pluck('id')->random(),
                'forma_pago_id'=>Forma_pago::pluck('id')->random(),
            ];
        }
        else{
            return [
                'numero'=>$this->faker->unique()->randomNumber(7,true),
                'observaciones'=>$this->faker->paragraph(),
                'sede_id'=>Sede::pluck('id')->random(),
                'forma_pago_id'=>Forma_pago::pluck('id')->random(),
                'persona_id'=>Persona::pluck('id')->random(),
            ];
        }

    }
}
