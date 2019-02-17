<?php

use Faker\Generator as Faker;

$factory->define(App\Desk::class, function (Faker $faker) {
    return [
        'name' => str_random(5),
        'slug' => str_random(10),
    ];
});
