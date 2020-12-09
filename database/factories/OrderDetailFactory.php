<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Illuminate\Support\Str;
use Faker\Generator as Faker;

use App\Models\OrderDetail;

$factory->define(OrderDetail::class, function (Faker $faker) {
    return [
        'quantity' => $faker->randomNumber,
        'price' => $faker->randomFloat(2, 0, 9999),
        'order_id' => factory(App\Models\Order::class),
        'product_id' => factory(App\Models\Product::class),
    ];
});
