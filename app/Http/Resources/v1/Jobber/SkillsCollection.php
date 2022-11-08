<?php

namespace App\Http\Resources\v1\Jobber;

use App\SubCategory;
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
            'main_category' => (string)$this->category->title??"0",
            'sub_category' => (string)$this->sub_category??"0",
            'skills' => $this->skills()??"",
            'equipments' => $this->equipments()??"",
            'engagments' => $this->engagments()??"",
            'experience' => $this->experience,
            'diploma_name' => $this->diploma_name??"",
            'description' => $this->description??"",
        ];
    }
}
