<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ciudad extends Model
{
    protected $fillable = [
    'id',
    'nombre',
    'identificador',
    
    ];

    public function rela_concesionario(){
        
        return $this->belongsToMany(concesionario::class);
    }
}
