<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobberSkills extends Model
{
    public function skills(){
        $skill_array = array();
        foreach (explode(',', $this->skills) as $skill){
            $subcat = SubCategory::where('id', $skill)->first();
            $skill_array[] = $subcat->title;
        }
        $skilloutput = implode(",  ", $skill_array);
        return $skilloutput;
    }
    public function equipments(){
        $equipment_array = array();
        foreach (explode(',', $this->equipments) as $equ){
            $equipment_array[] = $equ;
        }
        $equipmentoutput = implode(",  ", $equipment_array);
        return $equipmentoutput;
    }
    public function engagments(){
        $engagment_array = array();
        foreach (explode(',', $this->engagments) as $eng){
            $engagment_array[] = $eng;
        }
        $engagmentoutput = implode(",  ", $engagment_array);
        return $engagmentoutput;
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'main_category');
    }
    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category');
    }
}
