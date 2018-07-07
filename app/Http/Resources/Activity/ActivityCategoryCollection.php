<?php

namespace App\Http\Resources\Activity;

use Illuminate\Http\Resources\Json\Resource;

class ActivityCategoryCollection extends Resource
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
          'Project Description' =>$this->description

        ];
    }
}
