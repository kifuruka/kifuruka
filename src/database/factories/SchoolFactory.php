<?php

use Faker\Generator as Faker;

$factory->define(App\Models\School::class, function (Faker $faker) {
    return [
        'school_name'    => $faker->randomElement([
            '法政大学',
            '青山学院大学',
            '近畿大学',
            '東海大学',
            '日本大学',
            '中央大学',
            '関西学院大学',
            '立命館大学',
            '早稲田大学',
            '北海学園大学',
            '酪農大学',
            '国士舘大学',
            '同志社大学',
        ]),
        'activity_count' => $faker-> numberBetween(0,10),
        'top_contents'   => $faker-> realText,
        'sub_title1'     => $faker-> realText(20),
        'sub_contents1'  => $faker-> realText,
        'sub_image1'     => $faker-> imageUrl,
        'sub_title2'     => $faker-> realText(20),
        'sub_contents2'  => $faker-> realText,
        'sub_image2'     => $faker-> imageUrl,
        'sub_title3'     => $faker-> realText(20),
        'sub_contents3'  => $faker-> realText,
        'sub_image3'     => $faker-> imageUrl,
        'tel'            => $faker-> phoneNumber,
        'school_img'     => $faker-> imageUrl,
        'school_logo'    => $faker-> imageUrl,
        'url'            => $faker-> url,
        'postal_code'    => $faker-> postcode,
        's_state'        => $faker-> prefecture,
        's_city'         => $faker-> city,
        's_address1'     => $faker-> streetAddress,
        // 's_address2' =>$faker->,
        'school_type'    => $faker-> numberBetween(0,5),
    ];
});