<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\Models\User::class, function (Faker $faker) {
    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'age' => $faker->numberBetween(18, 80),
        'nickname' => $faker->userName,
    ];
});
