<?php

use Faker\Generator as Faker;
use App\Model\Project;
use App\Model\ImplimentPartiners;
$factory->define(App\Model\ProjectImplimenter::class, function (Faker $faker) {
   return [
         'project_id'=>function(){
         	return Project::all()->random();
         },
          'impliment_partiner_id'=>function(){
            return ImplimentPartiners::all()->random();
         },
       
        'description' =>$faker->word,
        'created_by'=>"samisams",
        'updated_by' =>"samisams"
    ];
});



