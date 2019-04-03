<?php

use Faker\Generator as Faker;
use App\User as User;


$factory->define(App\Models\UserDetail::class, function (Faker $faker) {
    return [
        'user_id'         => User::all()->random()->id,
        'user_first_name' => $faker-> firstName,
        'user_last_name'  => $faker-> lastName,
        'user_first_kana' => $faker-> firstKanaName,
        'user_last_kana'  => $faker-> lastKanaName,
        'tel'             => $faker-> phoneNumber,
        'sex'             => $faker-> randomElement([0,1]),
        'birthday'        => $faker-> dateTimeBetween('-80 years', '-20years')->format('Y-m-d'),
        'user_img'        => $faker-> imageUrl,
        'postal_code'     => $faker-> postcode,
        'u_state'         => $faker-> prefecture,
        'u_city'          => $faker-> city,
        'u_address1'      => $faker-> streetAddress,
        // 'u_address2'      => $faker-> 
    ];
});
