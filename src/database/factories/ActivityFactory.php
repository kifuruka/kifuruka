<?php

use Faker\Generator as Faker;
use App\Models\School as School;

$factory->define(App\Models\Activity::class, function (Faker $faker) {
    return [
        'school_id'       => School::all()->random()->id,
        'activity_name'   => $faker->randomElement([
            'バスケットボール部',
            'バレーボール部',
            'サッカー部',
            '野球部',
            '柔道部',
            '剣道部',
            '陸上部',
            'スキー部',
            'ラグビー部',
            'アメリカンフットボール部',
            '体操部',
            'テニス部',
            'バドミントン部',
        ]), 
        'title'           => $faker-> realText(20),
        'top_contents'    => $faker-> realText,
        'sub_title1'      => $faker-> realText(20),
        'sub_contents1'   => $faker-> realText,
        'sub_image1'      => $faker-> imageUrl,
        'sub_title2'      => $faker-> realText(20),
        'sub_contents2'   => $faker-> realText,
        'sub_image2'      => $faker-> imageUrl,
        'sub_title3'      => $faker-> realText(20),
        'sub_contents3'   => $faker-> realText,
        'sub_image3'      => $faker-> imageUrl,
        'total_donation'  => $faker-> numberBetween(5000,2500000),
        'fans'            => $faker-> numberBetween(0,1000),
        'activity_img'    => $faker-> imageUrl,
        'url'             => $faker-> url,
    ];
});
