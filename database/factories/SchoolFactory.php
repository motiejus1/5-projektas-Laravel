<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\School;
use Faker\Generator as Faker;

$factory->define(School::class, function (Faker $faker) {
    return [
        "name" => $faker->company(),
        "description" => $faker->sentence(10),
        "place" => $faker->country(),
        "phone" => $faker->e164phoneNumber() //827-545-244541
        //$faker->e164PhoneNumber() // +3704545454545
    ];
});
