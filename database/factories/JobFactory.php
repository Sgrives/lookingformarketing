<?php

use Faker\Generator as Faker;

$factory->define(App\Job::class, function (Faker $faker) {
	return [
		'title'			=> $faker->name,
		'slug'			=> str_random(10),
		'company_id'	=> $faker->numberBetween($min = 1, $max = 50),
		'category_id'	=> $faker->numberBetween($min = 1, $max = 50),
		'type_id'		=> $faker->numberBetween($min = 1, $max = 50),
		'desk_id'		=> $faker->numberBetween($min = 1, $max = 50),
		'record'		=> $faker->numberBetween($min = 1, $max = 50),
		'location'		=> $faker->lastName,
		'location_slug'	=> $faker->randomDigit,
		'apply' 		=> $faker->paragraph,
		'description' 	=> $faker->paragraph,
		'active' 		=> 1,
		'updated_at' 	=> $faker->dateTimeThisYear($max = 'now', $timezone = null),
	];
});
