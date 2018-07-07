<?php

namespace App\Model;
use App\Model\Project;
use App\Model\Activitylist;
use Illuminate\Database\Eloquent\Model;

class ActivityCategory extends Model
{
    	    public function Project(){
    	return $this->belongsTo(Project::class);
}
         public function Activitylist(){
    	return $this->hasMany(Activitylist::class);   
}
}



 
