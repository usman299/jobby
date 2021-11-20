<?php

namespace App\Http\Resources\JobRequest;

use Illuminate\Http\Resources\Json\JsonResource;

class PostJobRequestCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);

        
    }
}
