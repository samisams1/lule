<?php

namespace App\Http\Resources\Activity;

use Illuminate\Http\Resources\Json\JsonResource;

class SubActivityListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
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
