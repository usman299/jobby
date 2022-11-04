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
        $skill_array = array();
        foreach (explode(',', $this->skills) as $skill){
            $subcat = SubCategory::where('id', $skill)->first();
            $skill_array[] = $subcat->title;
        }
        $skilloutput = implode(",  ", $skill_array);
        $equipment_array = array();
        foreach (explode(',', $this->equipments) as $equ){
            $equipment_array[] = $equ;
        }
        $equipmentoutput = implode(",  ", $equipment_array);
        $engagment_array = array();
        foreach (explode(',', $this->engagments) as $eng){
            $engagment_array[] = $eng;
        }
        $engagmentoutput = implode(",  ", $engagment_array);
        return [
            'id' => $this->id,
            'main_category' => (string)$this->main_category??"0",
            'sub_category' => (string)$this->sub_category??"0",
            'skills' => $skilloutput,
            'equipments' => $equipmentoutput,
            'engagments' => $engagmentoutput,
            'experience' => $this->experience,
            'diploma_name' => $this->diploma_name??"",
            'description' => $this->description??"",
        ];
    }
}
