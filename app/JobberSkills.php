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
}
