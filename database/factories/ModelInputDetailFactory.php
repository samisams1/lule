<?php

use Faker\Generator as Faker;
use App\Model\InputSubList;
$factory->define(App\Model\InputDetail::class, function (Faker $faker) {
       return [
         'input_sub_list_id'=>function(){
         	return InputSubList::all()->random();
         },
        'description' =>$faker->word,
        'key' =>$faker->word,
        'value' =>$faker->word,
        'created_by'=>"samisams",
          'updated_by' =>"samisams"
    ];
});
