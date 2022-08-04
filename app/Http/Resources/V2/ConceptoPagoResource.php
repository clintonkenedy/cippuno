<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\JsonResource;

class ConceptoPagoResource extends JsonResource
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
            'cantidad'=>$this->cantidad,
            'precio'=>$this->precio,
            'pago'=>[
                'id'=>$this->pagos,
            ],
            'concepto'=>[
                'id'=>$this->conceptos,
            ],

        ];
    }
}
