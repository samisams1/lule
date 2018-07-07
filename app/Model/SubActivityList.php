<?php

namespace App\Model;
use App\Model\ActivityList;
use App\Model\SubOutputList;
use App\Model\Kebele;
use Illuminate\Database\Eloquent\Model;

class SubActivityList extends Model
{
    
         public function ActivityList(){
    	return $this->belongsTo(ActivityList::class);
}
         public function SubOutputList(){
    	return $this->belongsTo(SubOutputList::class);
}
         public function Kebele(){
    	return $this->belongsTo(Kebele::class);
}
}
