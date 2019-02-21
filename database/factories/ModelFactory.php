<?php

use Faker\Generator as Faker;

// TODO: factoy底層可以看得到有那些欄位可以，不過那是底層的東西先不研究，可以先用基本的東西

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\UserInfo::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'name' => $faker->name,
        'address' => $faker->address,
        'mobile' => $faker->phoneNumber,
    ];
});
