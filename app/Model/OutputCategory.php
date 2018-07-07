<?php

namespace App\Model;
use App\Model\OutputList;
use App\Model\Project;
use Illuminate\Database\Eloquent\Model;

class OutputCategory extends Model
{
	 	public function Project(){
		return $this->belongsTo(Project::class);
	}
        public function OutputList(){
    	return $this->hasMany(OutputList::class);   
}
}
