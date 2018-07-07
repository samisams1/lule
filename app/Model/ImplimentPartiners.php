<?php

namespace App\Model;
use App\Model\ImplimentPartinerStuf;
use App\Model\ProjectStuf;
use App\Model\ProjectImplimenter;
use Illuminate\Database\Eloquent\Model;

class ImplimentPartiners extends Model
{
    	      public function ProjectStuf(){
    	return $this->hasMany(ProjectStuf::class);
}
        public function ProjectImplimenter(){
    	return $this->hasMany(ProjectImplimenter::class);   
}

}
