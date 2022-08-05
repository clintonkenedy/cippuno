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
    public function tipo_tramite(){
        return $this->belongsTo(Tipo_tramite::class);
    }
    static $rules = [
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];
}
