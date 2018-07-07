<?php

namespace App\Http\Resources\Activity;

use Illuminate\Http\Resources\Json\Resource;

class SubActivityListCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
         return [
          'Sub Activity Name' =>$this->name,
          'Sub Activity  Description' =>$this->description,
          'start' =>$this->start,
          'end' =>$this->end,
          'plan' =>$this->plan,
          'actual' =>$this->actual,
          'plan_budget' =>$this->plan_budget,
          'actual_budget' =>$this->actual_budget,
          'kebele'  =>$this->kebele->name,
          'SubOutput' =>$this->SubOutputList->name

        ];
    }
}
