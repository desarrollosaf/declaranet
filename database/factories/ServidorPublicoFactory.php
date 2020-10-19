<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ServidorPublico;
use Faker\Generator as Faker;

$factory->define(ServidorPublico::class, function (Faker $faker) {
    return [
        "nombre" => $faker->name,
        "primer_apellido" => $faker->lastName,
        "segundo_apellido" => $faker->lastName,
        "rfc" => strtoupper($faker->lexify("??????????????????")),
        "curp" => strtoupper($faker->lexify("??????????")),
        "homoclave" => strtoupper($faker->lexify("???"))
    ];
});
