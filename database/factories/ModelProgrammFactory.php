<?php

use Faker\Generator as Faker;
use App\Model\ProgramCategory;
$factory->define(App\Model\Programmes::class, function (Faker $faker) {
     return [
         'program_category_id'=>function(){
         	return ProgramCategory::all()->random();
         },
        'name' =>$faker->word,
        'description' =>$faker->word,
        'goal' =>$faker->word,
        'objective_log_term' =>$faker->word,
        'specific_objective' =>$faker->word,
        'budget' =>250000,
        'starting_year'  =>"1990" ,
        'ending_year' =>"1990" ,
        'status' => "active",
        'created_by'=>"samisams",
        'updated_by' =>"samisams"
    ];
});


