<?php

use Faker\Generator as Faker;

$factory->define(App\Ships::class, function (Faker $faker) {
    return [
        'Name' => $faker->name,
        'size' => $faker->numberBetween($min = 10, $max = 99),
        'Image_url' => $faker->imageUrl($width = 640, $height = 480)
    ];
});
