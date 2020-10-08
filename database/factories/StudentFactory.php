<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name'=> $faker->name ,
        'email'=> $faker->unique()->email,
        'age'=> $faker->boolean(75) ? $faker->numberBetween(18, 25) : $faker->numberBetween(14, 17)
    ];
});
