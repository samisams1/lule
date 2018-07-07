<?php

namespace App\Model;
use App\Model\Wereda;
use App\Model\SubActivityList;
use Illuminate\Database\Eloquent\Model;

class Kebele extends Model
{
      public function Wereda(){
    	return $this->belongsTo(Wereda::class);
}

     public function SubActivityList(){
    	return $this->hasMany(SubActivityList::class);
}

}
