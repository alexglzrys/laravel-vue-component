<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Idea;
use Faker\Generator as Faker;

$factory->define(Idea::class, function (Faker $faker) {
    return [
        'description' => $faker->sentence
    ];
});
