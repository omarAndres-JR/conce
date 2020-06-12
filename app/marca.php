<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class marca extends Model
{
    protected $fillable =['id','nombre','categoria','num_referencia'];



public function rela_concesionario(){
    return $this->beLongsToMany(concesionario::class);
}
}
