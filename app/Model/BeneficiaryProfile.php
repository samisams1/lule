<?php

namespace App\Model;
use App\Model\InputDetail;
use App\Model\BeneficiaryProfile;
use Illuminate\Database\Eloquent\Model;

class BeneficiaryProfile extends Model
{
      	public function InputDetail(){
		return $this->hasMany(InputDetail::class);
	}
}
