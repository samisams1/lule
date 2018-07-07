<?php

use Faker\Generator as Faker;
use App\Model\Projects;
$factory->define(App\Model\Beneficiaryprofile::class, function (Faker $faker) {
           return [
        'name' =>$faker->word,
        'description' =>$faker->word,
        'created_by'=>"samisams",
          'updated_by' =>"samisams"
    ];
});
