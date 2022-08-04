<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concepto extends Model
{
    use HasFactory;
    //uno a muchos
    public function pago_conceptos(){
        return $this->hasMany(Pago_concepto::class);
    }
    //muchos a muchos
    public function pagos(){
        return $this->belongsToMany(Pago::class);
    }
}
