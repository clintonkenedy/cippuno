<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago_concepto extends Model
{
    use HasFactory;
    //uno a muchos inveso
    public function concepto(){
        return $this->belongsTo(Concepto::class);
    }
    //uno a muchos inveso
    public function pago(){
        return $this->belongsTo(Pago::class);
    }
}
