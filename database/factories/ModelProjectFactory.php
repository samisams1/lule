<?php

use Faker\Generator as Faker;
use App\Model\ProjectCategory;
use App\Model\Region;
$factory->define(App\Model\Project::class, function (Faker $faker) {
  return [
         'project_category_id'=>function(){
         	return ProjectCategory::all()->random();
         },
          'region_id'=>function(){
            return Region::all()->random();
         },
        'name' =>$faker->word,
        'description' =>$faker->word,
        'goal' =>$faker->word,
        'objective_long_term' =>$faker->word,
        'specific_objective' =>$faker->word,
        'total_budget' =>430000,
        'total_plan' =>400000,
        'start_date' =>$faker->date,
        'end_date' =>$faker->date,
        'created_by'=>"samisams",
        'status' =>"active",
        'updated_by' =>"samisams"
    ];
});
