<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConcesionarioProveedor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concesionario_proveedor', function (Blueprint $table) {
            $table->unsignedBigInteger('proveedor_id');
            $table->unsignedBigInteger('concesionario_id');

            $table->foreign('proveedor_id')->references('id')->on('proveedor');
            $table->foreign('concesionario_id')->references('id')->on('concesionario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('concesionario_proveedor');
    }
}
