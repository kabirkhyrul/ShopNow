<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Illuminate\Support\Str;
use Faker\Generator as Faker;

use App\Models\Coupon;

$factory->define(Coupon::class, function (Faker $faker) {
    return [
        'code' => $faker->text(255),
        'start_date' => $faker->date,
        'expired_date' => $faker->date,
        'discount_type' => 'Amount',
        'amount' => $faker->randomNumber(2),
    ];
});
