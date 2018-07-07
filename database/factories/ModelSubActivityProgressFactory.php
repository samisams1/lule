<?php

use Faker\Generator as Faker;
use App\Model\SubActivityList;
use App\Model\Kebele;
$factory->define(App\Model\SubActivityProgress::class, function (Faker $faker) {
    return [
         'sub_activity_id'=>function(){
         	return SubActivityList::all()->random();
         },
          'kebele_id'=>function(){
         	return Kebele::all()->random();
         },
          'plan' =>$faker->word,
           'actual' =>$faker->word,
            'start_date' =>$faker->word,
              'ende_date' =>$faker->word,
              'created_by'=>"samisams",
          'updated_by' =>"samisams"
    ];
});
