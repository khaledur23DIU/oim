<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'official_id' => $faker->unique()->e164PhoneNumber,
        'contact' => $faker->unique()->tollFreePhoneNumber,
        'department_id' => $faker->unique()->randomDigit,
        'batch_id' => $faker->randomDigit,
    ];
});
