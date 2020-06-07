<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    return [
        'title' => $faker->text,
        'description' => $faker->text,
        'end_at' => \Carbon\Carbon::now()->addDays(5),
        'status' => 'moderated',
        'user_id' => \App\User::inRandomOrder()->first()->id
    ];
});
