<?php

namespace App\Model;
use App\Model\ActivityCategory;
use App\Model\SubActivityList;
use App\Model\OutputList;
use Illuminate\Database\Eloquent\Model;

class ActivityList extends Model
{
		public function OutputList(){
		return $this->belongsTo(OutputList::class);
	}
	 
    	public function ActivityCategory(){
		return $this->belongsTo(ActivityCategory::class);
	}
		public function SubActivityList(){
		return $this->hasMany(SubActivityList::class);
	}
}
