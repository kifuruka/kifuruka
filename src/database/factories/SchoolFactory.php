<?php

use Faker\Generator as Faker;

$factory->define(App\Models\School::class, function (Faker $faker) {
    return [

        'school_name' => $faker-> lastName,
        'activity_count' => $faker-> numberBetween(0,10),
        'top_contents' => $faker-> realText,
        'tel' => $faker-> phoneNumber,
        'school_img' => $faker-> imageUrl,
        'url' => $faker-> url,
        'postal_code'=>$faker-> postcode,
        's_state' => $faker-> prefecture,
        's_city' => $faker-> city,
        's_address1' => $faker-> streetAddress,
        // 's_address2',100)->nullable();
        'school_type'=> $faker-> numberBetween(0,5),
    ];
});