

<?php
use Carbon\Carbon;
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

$factory->define(App\clientes::class, function (Faker\Generator $faker) {
    return [
      
        'NOMBRE_CLIENTE' => $faker->name,
        'ESTADO' => $faker->biasedNumberBetween($min = 0, $max = 1, $function = 'sqrt'),
        'FECHA_ENTRADA' =>date('y-m-d'),
        'HORA_ENTRADA' =>Carbon::now(),
        'HORA_SALIDA' => 'null',
    ];
});


$factory->define(App\producto::class, function (Faker\Generator $faker) {
    return [
        'NOMBRE_PRODUCTO' => $faker->name,
        'COSTO' => $faker ->biasedNumberBetween($min = 20.00, $max = 1000.50, $function = 'sqrt'),
        'CATEGORIA'=> $faker->biasedNumberBetween($min = 0, $max = 4, $function = 'sqrt'),
    ];
});

$factory->define(App\venta::class, function (Faker\Generator $faker) {
    return [

        'ID_C' =>$faker->biasedNumberBetween($min = 0, $max = 200, $function = 'sqrt'),
        'ID_P' =>$faker->biasedNumberBetween($min = 0, $max = 200, $function = 'sqrt'),
        'CANTIDAD' =>$faker->biasedNumberBetween($min = 0, $max = 4, $function = 'sqrt'),
    ];
});