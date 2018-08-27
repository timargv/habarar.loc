<?php

use Faker\Generator as Faker;

$factory->define(\App\Ayat::class, function (Faker $faker) {
    static $number = 1;
    static $sura_id = 1;
    return [
        'text' => $faker->name,
        'text_original' => $faker->name,
        'text_transcription_ru' => $faker->name,
        'number' => $number++,
        'sura_id' => $sura_id++,
    ];
});
