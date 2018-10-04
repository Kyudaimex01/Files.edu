<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'address' => $faker->streetAddress,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'phone' => $faker->phoneNumber,
        'profile_image' => 'http://via.placeholder.com/150*150',
        'remember_token' => str_random(10),
        'type' => $faker -> numberBetween(1,3),
    ];
});

$factory->define(App\Message::class, function (Faker $faker) {
    do{
        $user_id = rand(1,10);
        $receiver_id = rand(1,10);
    }while($user_id == $receiver_id);

    return [
        'user_id' => $user_id,
        'receiver_id' => $receiver_id,
        'message' => $faker->sentence,
    ];
});
