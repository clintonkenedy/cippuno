<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tramite extends Model
{
    use HasFactory;

    public function colegiado(){
        return $this->belongsTo(Colegiado::class);
    }

    public function seguimientos(){
        return $this->hasMany(Seguimiento::class);
    }

    public function persona(){
        return $this->belongsTo(Persona::class);
    }
}
