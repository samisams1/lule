<?php

namespace App\Http\Resources\Project;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
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
        'Project Category' =>$this->ProjectCategory->name,
        'Project ProjectDonore' =>$this->ProjectDonore->first()

        ];
    }
}
