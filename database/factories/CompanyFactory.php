<?php

use Faker\Generator as Faker;

$factory->define(App\Company::class, function (Faker $faker) {
    return [
        'record' => str_random(10),
        'name' => $faker->name,
        'slug' => str_random(10),
        'url' => str_random(5).'.com',
        'email' => $faker->unique()->safeEmail,
        'description' => $faker->paragraph,
    ];
});
