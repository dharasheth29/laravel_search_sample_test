<?php

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Carbon\Carbon;

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

$factory->define(User::class, function (Faker $faker) {    
    return [
        'firstname' => $faker->name,
        'lastname' => $faker->lastname,
        'mobile' => $faker->phoneNumber,        
        'address' => $faker->country,
        'email' => $faker->unique()->safeEmail,            
        'membership_type' => $faker->randomElement(['silver', 'gold', 'platinum']),
        'membership_expiry_date' => $faker->randomElement(['2019-04-25', '2019-05-10', '2019-04-30', '2019-09-09', '2019-07-10', '2019-07-28', 
                                    '2019-08-09', '2019-10-10', '2020-05-30']),
    ];
});
