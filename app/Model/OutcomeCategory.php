<?php

namespace App\Model;
use App\Model\OutComeList;
use App\Model\Project;
use Illuminate\Database\Eloquent\Model;

class OutcomeCategory extends Model
{
	                 public function Project(){
    	return $this->belongsTo(Project::class);
}
                 public function OutComeList(){
    	return $this->hasMony(OutComeList::class);
}
}
