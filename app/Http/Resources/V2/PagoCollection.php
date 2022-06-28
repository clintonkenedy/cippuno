<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PagoCollection extends ResourceCollection
{
    public $collects=PagoResource::class;
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'data'=>$this->collection,
            'meta'=>[
                'organization'=>'cippuno',
                'author'=>[
                    'Clinton','Angel',
                ],
            ],
            'type'=>'tramites',
        ];

    }
}
