<?php

namespace App\Model;
use App\Model\BeneficiaryProfile;
use App\Model\GroupBeneficiary;
use Illuminate\Database\Eloquent\Model;

class GroupMember extends Model
{
     	public function GroupBeneficiary(){
		return $this->belongsTo(GroupBeneficiary::class);
	}
	 	public function BeneficiaryProfile(){
		return $this->belongsTo(BeneficiaryProfile::class);
	}
}
