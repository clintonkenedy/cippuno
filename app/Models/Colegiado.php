<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Colegiado extends Model
{
    use HasFactory;
    use HasApiTokens;

    protected $fillable = [
        'nombres',
        'email',
        'password'
    ];

    //uno a muchos inverso
    public function capitulo() {
        return $this->belongsTo(Capitulo::class);
    }

    public function pagos() {
        return $this->hasMany(Pago::class);
    }

    public function matriculas() {
        return $this->hasMany(Matricula::class);
    }

    public function tramites() {
        return $this->hasMany(Tramite::class);
    }
}
