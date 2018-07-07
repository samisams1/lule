<?php

namespace App\Model;
use App\Model\OutcomeCategory;
use App\Model\SuboutComeList;
use App\Model\OutputList;
use Illuminate\Database\Eloquent\Model;

class OutcomeList extends Model
{
             public function OutcomeCategory(){
    	return $this->belongsTo(OutcomeCategory::class);
}
             public function SuboutComeList(){
    	return $this->hasMany(SuboutComeList::class);
}
             public function OutputList(){
    	return $this->hasMany(OutputList::class);
}
}
