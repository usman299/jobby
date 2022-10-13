<?php

namespace App\Http\Resources\v1\Jobber;

use Illuminate\Http\Resources\Json\JsonResource;


class SkillsCollection extends JsonResource
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
            'id' => $this->id,
            'title' => $this->title??"",
            'image' => $this->img??"",
        ];
    }
}
