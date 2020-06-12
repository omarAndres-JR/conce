<?php

namespace App;
use app\ciudad;
use app\marca;
use app\proveedor;
use Illuminate\Database\Eloquent\Model;

class concesionario extends Model
{
    protected $fillable = [
        'id',
        'cliente_id',
        'proveedor_id',
        'marca_id',
        'direccion',
        'telefono',
        'nombre',
        'email'
    ];

    public function rela_cliente(){
        return $this->beLongsToMany(cliente::class);

    }
    public function rela_marca(){
        return $this->beLongsToMany(marca::class);
    }
    public function rela_proveedor(){
        return $this->beLogsToMany(proveedor::class);
    }
}

