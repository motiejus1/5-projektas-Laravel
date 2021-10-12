<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AttendanceGroup;
use Faker\Generator as Faker;

$factory->define(AttendanceGroup::class, function (Faker $faker) {


    $difficulty = array("easy", "medium", "hard");

    return [
        "name" => $faker->company(), // sugeneruoja imones pavadinimas
        // "description" => $faker->words(10), 10 zodziu
        // "description" => $faker->word(), 1 zodis
        // "description" => $faker->sentence(); 1 sakinys
        //"description" => $faker->sentence(10); 10 sakiniu
        "description" => $faker->paragraph(7),
        "difficulty" => $difficulty[rand(0,2)],
        "school_id" => rand(1,15)
    ];
});
