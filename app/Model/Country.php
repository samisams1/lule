<?php

namespace App\Model;
use App\Model\Cluster;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
                 public function Cluster(){
    	return $this->hasMany(Cluster::class);   
}
}
