<?php

namespace App\Http\Resources\Outcome;

use Illuminate\Http\Resources\Json\JsonResource;

class MeasureOutcomeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
