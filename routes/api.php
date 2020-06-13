<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::resource('ciudad','ciudadController' );  
Route::resource('ciudad.concesionario','ciudadConcesionarioController',['only'=> ['index']]);

Route::resource('marca','marcaController' );  
Route::resource('marca.concesionario','marcaConcesionarioController',['only'=> ['index']]);

Route::resource('proveedor','proveedorController' );  
Route::resource('proveedor.concesionario','proveedorConcesionarioController',['only'=> ['index']]);

Route::resource('cliente','clienteController' );  
Route::resource('cliente.concesionario','clienteConcesionarioController',['only'=> ['index']]);

Route::resource('concesionario','concesionarioController' );  
Route::resource('concesionario.cliente','concesionarioClienteController',['only'=> ['index']]);
Route::resource('concesionario.marca','concesionarioMarcaController',['only'=> ['index']]);
Route::resource('concesionario.proveedor','concesionarioProveedorController',['only'=> ['index']]);


Route::resource('locacion','locacionController' );  
Route::resource('locacion.concesionario','locacionConcesionarioController',['only'=> ['index']]);