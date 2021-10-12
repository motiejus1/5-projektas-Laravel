<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        "name" => $faker->firstName() , // sugeneruoja varda
        "surname" => $faker->lastName(), //sugeneruos mums pavarde
        //"group_id" => rand(1,10), //PHP funkcija rand()
        "group_id" => $faker->randomDigit(), // 0 iki 9
        "image_url" => $faker->imageUrl(300, 300, "animals", true) //susigineruoti tikrus paveiksliukus

        // i duomenu baze bando irasyti tuscius duomenis
        //$tekstas = '';
        // id yra automatiskai uzsipildantis(AUTO_INCREMENT)

    ];
});
