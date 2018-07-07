<?php

namespace App\Http\Resources\Program;

use Illuminate\Http\Resources\Json\Resource;

class ProgramCollection extends Resource
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
          'Programme  Name' =>$this->name,
          'Programme  Category' =>$this->ProgramCategory->name,
           'goal'       =>$this->goal,
           'objective_log_term' =>$this->objective_log_term,
           'specific_objective' =>$this->specific_objective,
           'budget'  =>'$'.$this->budget,
            'starting_year'  =>$this->starting_year,
            'ending_year' =>$this->starting_year
        ];
    }
}
