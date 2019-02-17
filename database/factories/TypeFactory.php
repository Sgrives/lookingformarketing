<?php

use Faker\Generator as Faker;

$factory->define(App\Type::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'slug' => str_random(10),
    ];
});
