<?php
use App\cliente;
use App\marca;
use App\proveedor;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */



$factory->define(App\cliente::class, function (Faker\Generator $faker) {
    

    return [
       
        'nombre' => $faker->name,
        'apellido' => $faker->lastname,
        'telefono' => $faker->unique()->phoneNumber,
        'email' => $faker->unique()->safeEmail,
         
    ];
});

$factory->define(App\marca::class, function (Faker\Generator $faker) {
    

    return [
       
        'nombre' => $faker->name,
        'categoria' => $faker->word,
        'num_referencia' => $faker->numberBetween(1,10),
         
    ];
});

$factory->define(App\proveedor::class, function (Faker\Generator $faker) {
    

    return [
       
        'nombre' => $faker->name,
        'telefono' => $faker->unique()->phoneNumber,
        'email' => $faker->unique()->safeEmail,
         
    ];
});




$factory->define(App\ciudad::class, function (Faker\Generator $faker) {
    

    return [
       
        'nombre' => $faker->name,
        'identificador' => $faker->numberBetween(1,4),
         
    ];
});

$factory->define(App\locacion::class, function (Faker\Generator $faker) {
    

    return [
       
        'longitud' => $faker->word,
        'latitud' => $faker->word,
         
    ];
});

$factory->define(App\concesionario::class, function (Faker\Generator $faker) {
    

    return [
       
        'direccion' => $faker->word,
        'nombre' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'telefono'  => $faker->unique()->phoneNumber,
    ];
});