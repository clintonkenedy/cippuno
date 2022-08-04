<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\JsonResource;

class PagoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        if ($this->persona->nombres ?? null) {
            return [
                'id'=>$this->id,
                'numero'=>$this->numero,
                'observaciones'=>$this->observaciones,
                'persona'=>[
                    //'nombres'=>{"$or":[{$this->colegiado->nombres},{'ga'}]},
                    'nombre'=> $this->persona->nombres,
                    // 'codigo'=>$this->colegiado->codigo_colegiado,
                ],
                'created_at'=>$this->created_at,
            ];
        }
        return [
            'id'=>$this->id,
            'numero'=>$this->numero,
            'observaciones'=>$this->observaciones,
            'colegiado'=>[
                'codigo'=>$this->colegiado->nombres,
            ],
            'created_at'=>$this->created_at,
        ];

    }
}
