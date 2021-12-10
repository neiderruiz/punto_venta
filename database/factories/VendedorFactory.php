<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Vendedor;
use Faker\Generator as Faker;

$factory->define(Vendedor::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'primer_apellido' => $faker->text,
        'segundo_apellido' => $faker->name,
        'usuario' => $faker->email,
        'password' => 'Password123',
    ];
});
