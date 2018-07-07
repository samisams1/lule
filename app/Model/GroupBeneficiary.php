<?php

namespace App\Model;
use App\Model\GroupMember;
use Illuminate\Database\Eloquent\Model;

class GroupBeneficiary extends Model
{
    	public function GroupMember(){
		return $this->hasMany(GroupMember::class);
	}
}
