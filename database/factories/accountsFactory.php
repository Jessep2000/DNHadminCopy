<?php

use Faker\Generator as Faker;

$factory->define(\App\account::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'IBAN' => $faker->iban('NL'),
        'description' => $faker->text(30),
        'created_at' => $faker->date(),
        'updated_at' => $faker->date()
    ];
});
