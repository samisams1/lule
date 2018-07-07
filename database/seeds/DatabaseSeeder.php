<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         factory(App\Model\Country::class,6)->create();
         factory(App\Model\Cluster::class,6)->create();
         factory(App\Model\Region::class,6)->create();
         factory(App\Model\Zone::class,6)->create();
         factory(App\Model\Wereda::class,6)->create();
         factory(App\Model\Kebele::class,6)->create();
         factory(App\Model\Donore::class,6)->create();

         
         factory(App\Model\ProgramCategory::class,6)->create();
         factory(App\Model\Programmes::class,6)->create();
         factory(App\Model\ProjectCategory::class,6)->create();      
        // factory(App\Model\BeneficiaryCategory::class,60)->create();  
         factory(App\Model\Beneficiaryprofile::class,6)->create();  
       //  factory(App\Model\GroupBeneficiary::class,60)->create();  
         factory(App\Model\Project::class,6)->create();
         factory(App\Model\OutcomeCategory::class,6)->create();
         factory(App\Model\OutcomeList::class,6)->create();
         factory(App\Model\SuboutComeList::class,6)->create();
         factory(App\Model\OutputCategory::class,6)->create();

         factory(App\Model\ProjectDonore::class,6)->create();
         
         
        factory(App\Model\ImplimentPartiners::class,6)->create();
        factory(App\Model\ProjectStuf::class,6)->create();
         factory(App\Model\ProjectImplimenter::class,6)->create();

        factory(App\Model\ImplimentPartinerStuf::class,6)->create();
         factory(App\Model\ActivityCategory::class,6)->create();
          factory(App\Model\OutputList::class,6)->create();
         factory(App\Model\ActivityList::class,6)->create();
         
         factory(App\Model\SubOutputList::class,6)->create();
         factory(App\Model\SubActivityList::class,6)->create();
        
       
      
         factory(App\Model\ProgrammDetail::class,6)->create();
         factory(App\Model\SubActivityProgress::class,6)->create();
         factory(App\Model\GroupBeneficiary::class,6)->create();
         factory(App\Model\GroupMember::class,6)->create();
         factory(App\Model\inputBneficiary::class,6)->create();
          factory(App\Model\InputType::class,6)->create();
          factory(App\Model\InputList::class,6)->create();
          factory(App\Model\InputSubList::class,6)->create();
        factory(App\Model\InputDetail::class,6)->create();
        factory(App\Model\Location::class,6)->create();
        factory(App\Model\Year::class,6)->create();
        factory(App\Model\Quarter::class,6)->create();
        factory(App\Model\Month::class,6)->create();
    }
}





