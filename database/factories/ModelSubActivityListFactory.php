<?php

use Faker\Generator as Faker;
use App\Model\ActivityList;
use App\Model\SubOutputList;
use App\Model\Kebele;
$factory->define(App\Model\SubActivityList::class, function (Faker $faker) {
      return [
         'activity_list_id'=>function(){
         	return ActivityList::all()->random();
         },
           'kebele_id'=>function(){
         	return Kebele::all()->random();
         },
          'sub_output_list_id'=>function(){
            return SubOutputList::all()->random();
         },
        'name' =>$faker->word,
        
        'description' =>$faker->word,
        'start' =>$faker->date,
        'end' =>$faker->date,
        'plan' =>$faker->date,
        'actual' =>$faker->date,

        'plan_budget' =>234,
        'actual_budget' =>333,

        'created_by'=>"samisams",
         'updated_by' =>"samisams"
    ];
});

             
            