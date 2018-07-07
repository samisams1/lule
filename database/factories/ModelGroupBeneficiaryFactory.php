<?php

use Faker\Generator as Faker;

$factory->define(App\Model\GroupBeneficiary::class, function (Faker $faker) {
     return [
        'name' =>$faker->word,
        'description' =>$faker->word,
        'created_by'=>"samisams",
          'updated_by' =>"samisams",
          'created_by'=>"samisams",
          'updated_by' =>"samisams"
    ];
});
