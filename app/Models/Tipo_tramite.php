<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_tramite extends Model
{
    use HasFactory;

    public function requisito_tipo_tramites(){
        return $this->hasMany(Requisito_tipo_tramite::class);
    }

    public function requisitos(){
        return $this->belongsToMany(Requisito::class);
    }
}
