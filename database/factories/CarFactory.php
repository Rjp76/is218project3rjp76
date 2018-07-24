<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'Model' => $faker->text(10),
        'Make' => $faker->randomElement(['Ford', 'Honda','Toyota']),
        'Year'=>$faker->numberBetween(1920,2018),

    ];
});
