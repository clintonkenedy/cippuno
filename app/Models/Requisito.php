<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisito extends Model
{
    use HasFactory;
    public function requisito_tipo_tramites(){
        return $this->hasMany(Requisito_tipo_tramite::class);
    }
    public function tipo_tramites(){
        return $this->belongsToMany(Tipo_tramite::class);
    }
}
