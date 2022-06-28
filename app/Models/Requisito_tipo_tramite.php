<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisito_tipo_tramite extends Model
{
    use HasFactory;

    public function requisito(){
        return $this->belongsTo(Requisito::class);
    }

    public function tipo_tramite(){
        return $this->belongsTo(Tipo_tramite::class);
    }
}
