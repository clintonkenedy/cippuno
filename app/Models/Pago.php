<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;
    //uno a muchos inverso
    public function forma_pago(){
        return $this->belongsTo(Forma_pago::class);
    }
    //uno a muchos inverso
    public function sede(){
        return $this->belongsTo(Sede::class);
    }
    //uno a muchos
    //public function pago_conceptos(){
    //    return $this->hasMany(Pago_concepto::class);
    //}
    //relaciones muchos amuchos
    public function conceptos(){
        return $this->belongsToMany(Concepto::class);
    }
    public function colegiado(){
        return $this->belongsTo(Colegiado::class);
    }

    public function persona(){
        return $this->belongsTo(Persona::class);
    }


}
