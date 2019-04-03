<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker\Factory::create('ja_JP');
         App\User::create([
            'account_name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'), // この場合、「password」でログインできる
            'remember_token' => str_random(10),
            'email_verified_at'=>$faker ->dateTime('now'),

        ]);
        factory(App\User::class, 10)->create();
    }
}
