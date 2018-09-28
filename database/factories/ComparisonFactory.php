<?php

use App\Comparison;
use Faker\Generator as Faker;

$factory->define(Comparison::class, function (Faker $faker) {
    return [
        'lang' => 'php',
        'method' => 'array_search',
    ];
});
