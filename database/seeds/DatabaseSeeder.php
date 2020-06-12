<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\ciudad;
use App\cliente;
use App\concesionario;
use App\proveedor;
use App\marca;
use App\locacion;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS =0');
        ciudad::truncate();
        cliente::truncate();
        concesionario::truncate();
        proveedor::truncate();
        locacion::truncate();
        marca::truncate();
        DB::table('concesionario_proveedor')->truncate();
        DB::table('cliente_concesionario')->truncate();
        DB::table('concesionario_marca')->truncate();
        factory(ciudad::class,50) -> create();
        factory(marca::class,30) -> create();
        factory(cliente::class,12) -> create();
        factory(proveedor::class,30) -> create();
        factory(locacion::class,50) -> create();
        factory(concesionario::class,30) -> create() -> each(function($concesionario){
            $clientes = cliente::all() ->random(mt_rand(1,5)) -> pluck('id');
        	$concesionario ->rela_cliente() -> attach($clientes);
        });
    }
}
