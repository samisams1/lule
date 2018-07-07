<?php

namespace App\Model;
use App\Model\Cluster;
use App\Model\Zone;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
        public function Cluster(){
    	return $this->belongsTo(Cluster::class);
}
        public function Zone(){
    	return $this->hasMany(Zone::class);
}
}
