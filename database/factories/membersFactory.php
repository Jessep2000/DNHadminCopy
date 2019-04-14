<?php

use Faker\Generator as Faker;

$factory->define(\App\members::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'adress' => $faker->address,
        'email' => $faker->email,
        'phone' => $faker->numberBetween(11111111, 999999999),
        'iban' => $faker->iban('NL'),
        'boatid' => $faker->numberBetween(10, 100)
    ];
});
