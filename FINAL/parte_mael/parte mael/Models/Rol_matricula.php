<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol_matricula extends Model
{
    use HasFactory;

    public function matriculas(){
        return $this->hasMany(Matricula::class);
    }
}
