<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Illuminate\Support\Str;
use Faker\Generator as Faker;

use App\Models\Review;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'body' => $faker->text,
        'ratings' => $faker->randomNumber(2),
        'product_id' => factory(App\Models\Product::class),
        'user_id' => factory(App\Models\User::class),
    ];
});
