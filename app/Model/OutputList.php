<?php

namespace App\Model;
use App\Model\OutputCategory;
use App\Model\SubOutputList;
use App\Model\OutcomeList;
use App\Model\ActivityList;
use Illuminate\Database\Eloquent\Model;

class OutputList extends Model
{
         public function OutputCategory(){
    	return $this->belongsTo(OutputCategory::class);
}
         public function OutcomeList(){
    	return $this->belongsTo(OutcomeList::class);
}
        public function SubOutputList(){
    	return $this->hasMany(SubOutputList::class);
}
       public function ActivityList(){
    	return $this->hasMany(ActivityList::class);
}
}
