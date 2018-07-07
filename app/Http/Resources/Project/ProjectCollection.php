<?php

namespace App\Http\Resources\Project;

use Illuminate\Http\Resources\Json\Resource;

class ProjectCollection extends Resource
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

        'Project Name' =>$this->name,
        'Project Category' =>$this->ProjectCategory->name,
        'Project ProjectDonore' =>$this->ProjectDonore->first(),
         'Project ProjectImplimenter' =>$this->ProjectImplimenter->first(),
        'Region' =>$this->Region->name,
        'objective_long_term' =>$this->objective_long_term,
        'specific_objective' =>$this->specific_objective,
        'total_budget' =>$this->total_budget,
        'total_plan' =>$this->total_plan,
        'start_date' =>$this->start_date,
        'end_date' =>$this->end_date,



        ];
    }
}
