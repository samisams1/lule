<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Country::class, function (Faker $faker) {
          return [
        'name' =>$faker->word,
        'country_code' =>$faker->word,
        'description' =>$faker->word,
        'created_by'=>"samisams",
          'updated_by' =>"samisams"
    ];
});
