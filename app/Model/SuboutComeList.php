<?php

namespace App\Model;
use App\Model\OutcomeList;
use App\Model\SubOutputList;
use Illuminate\Database\Eloquent\Model;

class SuboutComeList extends Model
{
         public function OutcomeList(){
    	return $this->belongsTo(OutcomeList::class);
}
         public function SubOutputList(){
    	return $this->hasMany(SubOutputList::class);
}
}
