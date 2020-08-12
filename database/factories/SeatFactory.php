<?php
use App\Seat;
use Faker\Generator as Faker;

$factory->define(Seat::class, function (Faker $faker) {
    return [
        "hall_id" => rand(1, 5),
        'row' =>$faker->unique()->randomDigit,
        'number' =>$faker->unique()->randomDigit,
        'price' => $faker->unique(true)->numberBetween($min = 1500, $max = 6000),

    ];
});
