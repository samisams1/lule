<?php

namespace App\Model;
use App\Model\ProjectCategory;
use App\Model\OutcomeCategory;
use App\Model\ActivityCategory;
use App\Model\ProjectDonore;
use App\Model\ProjectImplimenter;
use App\Model\Region;
use Illuminate\Database\Eloquent\Model;
class Project extends Model
{
     public function ProjectCategory(){
    	return $this->belongsTo(ProjectCategory::class);
}
     public function Region(){
        return $this->belongsTo(Region::class);
}
                 public function OutcomeCategory(){
    	return $this->hasMany(OutcomeCategory::class);
}
        public function ActivityCategory(){
    	return $this->hasMany(ActivityCategory::class);   
}
        public function ProjectDonore(){
    	return $this->hasMany(ProjectDonore::class);   
}
        public function ProjectImplimenter(){
    	return $this->hasMany(ProjectImplimenter::class);   
}
}
