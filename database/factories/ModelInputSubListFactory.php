<?php

use Faker\Generator as Faker;
use App\Model\InputList;
use App\Model\BeneficiaryProfile;
$factory->define(App\Model\InputSubList::class, function (Faker $faker) {
    return [
         'input_list_id'=>function(){
         	return InputList::all()->random();
         },
            'beneficiary_id'=>function(){
         	return BeneficiaryProfile::all()->random();
         },
         'beneficiary_type'=>$faker->word,
        'name' =>$faker->word,
        'description' =>$faker->word,
        'created_by'=>"samisams",
          'updated_by' =>"samisams"
    ];
});
