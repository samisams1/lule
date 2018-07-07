<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SubActivityProgress extends Model
{
                public function SubActivityList(){
    	return $this->hasMony(SubActivityList::class);
}
}
