<?php

use Faker\Generator as Faker;
use App\Model\ActivityCategory;
$factory->define(App\Model\ActivityList::class, function (Faker $faker) {
      return [
         'activity_category_id'=>function(){
         	return ActivityCategory::all()->random();
         },
        'name' =>$faker->word,
        'description' =>$faker->word,
        'created_by'=>"samisams",
          'updated_by' =>"samisams"
    ];
});
