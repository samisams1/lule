<?php

namespace App\Model;
use App\Model\OutputList;
use App\Model\SuboutComeList;
use App\Model\SubActivityList;
use Illuminate\Database\Eloquent\Model;

class SubOutputList extends Model
{
     public function OutputList(){
    	return $this->belongsTo(OutputList::class);
}
    public function SuboutComeList(){
    	return $this->belongsTo(SuboutComeList::class);
}
    public function SubActivityList(){
    	return $this->hasMany(SubActivityList::class);
}
}
