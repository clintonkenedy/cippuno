<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\JsonResource;

class ColegiadoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'nombres'=>$this->nombres,
            'a_paterno'=>$this->a_paterno,
            'a_materno'=>$this->a_materno,
            'codigo_colegiado'=>$this->codigo_colegiado,
            'dni'=>$this->dni,
            'direccion'=>$this->direccion,
            'ultimo_pago'=>$this->ultimo_pago,
            'capitulo'=>[
                'id'=>$this->capitulo->id,
                'nombre'=>$this->capitulo->nombre,
            ]
        ];
    }
}
