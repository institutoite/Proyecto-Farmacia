<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Clases\Persona;
use Faker\Generator as Faker;

$factory->define(App\Models\Clases\Persona::class, function (Faker $faker) {
    return [
        'nombre' => $faker->firstNameFemale,
        'apellidop' => $faker->lastName,
        'apellidom' => $faker->lastName,
        'fechanacimiento' => $faker->date,
        'direccion' => $faker->address,
        'genero' => 'MUJER',
        'telefono' => $faker->phoneNumber,
        'celular' => $faker->phoneNumber
    ];
});
