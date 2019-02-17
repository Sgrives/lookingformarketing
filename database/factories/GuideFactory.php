<?php

use Faker\Generator as Faker;

$factory->define(App\Guide::class, function (Faker $faker) {
	return [
		'title'		=> $faker->name,
		'slug' 		=> $faker->slug,
		'intro'		=> $faker->text,
		'body' 		=> $faker->paragraph,
	];
});
