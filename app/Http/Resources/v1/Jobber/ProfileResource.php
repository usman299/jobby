<?php

namespace App\Http\Resources\v1\Jobber;

use App\JobberProfile;
use App\JobberSkills;
use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $jobberSkills = JobberSkills::where('jobber_id', $this->id)->get();
        return [
            'jobber_id' => $this->id,
            'first_name' => $this->firstName??"",
            'last_name'=> $this->lastName??"",
            'phone'=> $this->phone??"",
            'email'=> $this->email??"",
            'address'=> $this->address??"",
            'country'=> $this->countory->name??"",
            'image'=> $this->image??"",
            'gender'=> (int)$this->gender ?? 0,
            'description'=> $this->description??"",
            'hours'=> $this->hours??"",
            'total_hours'=> $this->total_hours??"",
            'latitude'=> $this->latitude??"16.297131",
            'longitude'=> $this->longitude??"-61.523423",
            'radius'=> $this->radius??"",
            'member_since'=> \Carbon\Carbon::parse($this->created_at)??"",
            'experince'=> $this->experince??"",
            'total_jobs' => $this->totalJobs(1),
            'completed_jobs' => $this->totalJobs(2),
            'cancel_jobs' => $this->totalJobs(0),
            'skills' => SkillsCollection::collection($jobberSkills),
            'badge' => $this->badge ?? 0,
            'qualification' => $this->qualification ?? 'Sélectionner la qualification',
            'professional' => $this->professional ?? 'Sélectionnez Professionnel',
            'available_status' => false,
            'pro' => $this->pro== null ? 0 : (int)$this->pro,
            'verified' => $this->verified() == 1 ? true : false,
            'equipements' => isset($jobberSkills[0]) ? $jobberSkills[0]->equipments()  : "",
            'engagments' => isset($jobberSkills[0]) ? $jobberSkills[0]->engagments() : "",
            'personal_description' => "Description Here",
            'total_review' => $this->totalReview(),
            'rating' => $this->rating(),
            'reviews' => ReviewsCollection::collection($this->reviews()) ,
        ];
    }
}
