<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    protected $fillable = ['id' ,'nombre', 'telefono','email'];

    public function rela_concesionario(){
        return $this->belongsToMany(concesionario::class);
    }
}

