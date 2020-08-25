<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Faculty;
use Faker\Generator as Faker;

$factory->define(Faculty::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'initial' => $faker->unique()->word,
        'email' => $faker->unique()->safeEmail,
        'official_id' => $faker->unique()->e164PhoneNumber,
        'contact' => $faker->unique()->tollFreePhoneNumber,
        'department_id' => $faker->unique()->randomdigit,
        'designation' => $faker->randomdigit,
    ];
});
