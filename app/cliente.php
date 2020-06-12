<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $fillable = [
        'id',
        'nombre',
        'apellido',
        'telefono',
        'email'
    ];

    public function rela_concesionario(){
        
        return $this->hasMany(concesionario::class);
    }
}

