<?php

namespace App;
use app\cliente;
use app\marca;
use app\proveedor;
use Illuminate\Database\Eloquent\Model;

class concesionario extends Model
{
    protected $fillable = [
        'id',
        'direccion',
        'telefono',
        'nombre',
        'email'
    ];

    public function rela_cliente(){
        return $this->belongsToMany(cliente::class);

    }
    public function rela_marca(){
        return $this->belongsToMany(marca::class);
    }
    public function rela_proveedor(){
        return $this->belongsToMany(proveedor::class);
    }
}

