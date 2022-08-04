<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    use HasFactory;

    public function rol_matricula(){
        return $this->belongsTo(Rol_matricula::class);
    }

    public function colegiado(){
        return $this->belongsTo(Colegiado::class);
    }

    public function curso(){
        return $this->belongsTo(Curso::class);
    }
}
