<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seguimiento extends Model
{

    static $rules = [
		'hora' => 'required',
        'oficina_origen' => 'required',
        'oficina_destino' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['hora','oficina_destino','oficina_origen'];

}
