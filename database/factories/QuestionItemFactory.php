<?php

/** @var Factory $factory */

use App\QuestionItem;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(QuestionItem::class, function (Faker $faker) {
    return [
        'text' => $faker->text,
    ];
});
