<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    use HasFactory;
    //uno a muchos
    public function pagos(){
        return $this->hasMany(Pago::class);
    }
}
