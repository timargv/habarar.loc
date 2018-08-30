<?php

use Faker\Generator as Faker;

$factory->define(App\Sura::class, function (Faker $faker) {

    static $number = 1;
    return [
        'name' => $faker->name,
        'name_original' => $faker->name,
        'name_transcription_ru' => $faker->name,
        'number' => $number++,
    ];
});
