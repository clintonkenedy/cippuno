<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colegiado extends Model
{
    use HasFactory;

    //uno a muchos inverso
    public function capitulo(){
        return $this->belongsTo(Capitulo::class);
    }

    public function pagos(){
        return $this->hasMany(Pago::class);
    }

    public function matriculas(){
        return $this->hasMany(Matricula::class);
    }

    public function tramites(){
        return $this->hasMany(Tramite::class);
    }
}
