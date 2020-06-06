<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Event::class, function (Faker $faker) {
    return [
        'title' => $faker->realText(),
        'description' => $faker->realText(),
        'phone' => $faker->phoneNumber,
        'place' => $faker->address,
        'status' => \App\Event::MODERATED,
        'user_id' => \App\User::inRandomOrder()->first()->getQueueableId(),
    ];
});
