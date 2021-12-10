<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'descripcion' => $faker->text,
        'precio' => $faker->randomFloat(2, 0, 100),
        'contenido' => $faker->numberBetween(0, 100),
        'cantidad' => $faker->numberBetween(1, 10),
    ];
});
