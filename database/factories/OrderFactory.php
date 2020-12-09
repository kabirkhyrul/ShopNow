<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Illuminate\Support\Str;
use Faker\Generator as Faker;

use App\Models\Order;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'billing_address' => $faker->text(255),
        'billing_name' => $faker->text(255),
        'billing_mobile' => $faker->text(255),
        'notes' => $faker->text,
        'shipping_name' => $faker->text(255),
        'shipping_mobile' => $faker->text(255),
        'shipping_address' => $faker->text(255),
        'sub_total' => $faker->randomNumber(2),
        'profit' => $faker->randomNumber(2),
        'total' => $faker->randomFloat(2, 0, 9999),
        'status' => 'pending',
        'user_id' => factory(App\Models\User::class),
        'coupon_id' => factory(App\Models\Coupon::class),
    ];
});
