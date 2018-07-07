<?php

namespace App\Http\Resources\ProjectCategory;

use Illuminate\Http\Resources\Json\Resource;

class ProjectCategoryCollection extends Resource
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
          'Project Category Name' =>$this->name,
          'Project Category Description' =>$this->description,
          'Programm Name' =>$this->Programmes->name,
          'Programm Category' =>$this->Programmes->ProgramCategory->name

        ];
    }
}
