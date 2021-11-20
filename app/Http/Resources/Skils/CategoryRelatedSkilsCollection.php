<?php

namespace App\Http\Resources\Skils;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryRelatedSkilsCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
         return [
            'id' => $this->id,
            'title'=> $this->title,
            
        ];
    }
}
