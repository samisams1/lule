<?php

use Faker\Generator as Faker;
use App\Model\Project;
$factory->define(App\Model\OutcomeCategory::class, function (Faker $faker) {
   return [
         'project_id'=>function(){
         	return Project::all()->random();
         },
        'name' =>$faker->word,
        'description' =>$faker->word,
        'created_by'=>"samisams",
          'updated_by' =>"samisams"
    ];
});
