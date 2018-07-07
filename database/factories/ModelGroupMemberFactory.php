<?php

use Faker\Generator as Faker;
use App\Model\GroupBeneficiary;
use App\Model\BeneficiaryProfile;
$factory->define(App\Model\GroupMember::class, function (Faker $faker) {
       return [
         'group_beneficiarie_id'=>function(){
         	return GroupBeneficiary::all()->random();
         },
             'beneficiary_profile_id'=>function(){
         	return BeneficiaryProfile::all()->random();
         },
        'name' =>$faker->word,
        'description' =>$faker->word,
        'created_by'=>"samisams",
          'updated_by' =>"samisams"
    ];
});