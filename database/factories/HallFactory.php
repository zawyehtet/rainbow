<?php
use App\Hall;
use Faker\Generator as Faker;

$factory->define(Hall::class, function (Faker $faker) {
    return [
        'name' =>" Hall " .  $faker->unique()->randomDigit,
    ];
});
