<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class locacion extends Model
{
protected $fillable = [
    'id',
    'latitud',
    'longitud'
];

public function rela_concesionario(){
    return $this->belongsToMany(concesionario::class);

}
}

