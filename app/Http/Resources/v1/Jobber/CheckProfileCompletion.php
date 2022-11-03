<?php

namespace App\Http\Resources\v1\Jobber;

use App\JobberSkills;
use Illuminate\Http\Resources\Json\JsonResource;

class CheckProfileCompletion extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $jobberSkills = JobberSkills::where('jobber_id', $this->jobber_id)->first();
        return [
            'skills' => isset($jobberSkills) ? "yes" : "",
            'monday' => $this->monday??"",
            'tuesday' => $this->tuesday??"",
            'wednesday' => $this->wednesday??"",
            'thersday' => $this->thersday??"",
            'friday' => $this->friday??"",
            'saturday' => $this->saturday??"",
            'sunday' => $this->sunday??"",
            'insurance1' => $this->insurance1??"",
            'rules1' => $this->rules1??"",
            'eu_id_card_front' => $this->eu_id_card_front??"",
            'eu_id_residence_permit_front' => $this->eu_id_residence_permit_front??"",
            'vital_card_number'  => $this->vital_card_number??"",
            'social_security_number' => $this->social_security_number??"",
            'answer1' => $this->answer1??"",
            'score'=> $this->score??""
        ];
    }
}
