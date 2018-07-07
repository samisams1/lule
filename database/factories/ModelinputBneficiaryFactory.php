<?php

use Faker\Generator as Faker;
use App\Model\GroupBeneficiary;
$factory->define(App\Model\inputBneficiary::class, function (Faker $faker) {
     return [
         'group_id'=>function(){
         	return GroupBeneficiary::all()->random();
         },
        'input_intervation' =>$faker->word,
        'created_by'=>"samisams",
          'updated_by' =>"samisams"
    ];
});

