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
        $response_array = array();
        foreach (explode(',', $this->skills) as $skill){
            $response_array[] = $skill;
        }
        $output = implode(" ", $response_array);

        return [
            'id' => $this->id,
            'main_category' => (string)$this->main_category??"0",
            'sub_category' => (string)$this->sub_category??"0",
            'skills' => $output,
            'equipments' => explode(',', $this->equipments),
            'engagments' => explode(',', $this->engagments),
            'experience' => $this->experience,
            'diploma_name' => $this->diploma_name??"",
            'description' => $this->description??"",
        ];
    }
}
