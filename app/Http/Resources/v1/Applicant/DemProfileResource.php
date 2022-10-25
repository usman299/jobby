<?php

namespace App\Http\Resources\v1\Applicant;

use App\Http\Resources\v1\Jobber\ReviewsCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class DemProfileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        \Carbon\Carbon::setLocale('fr');
        $date = \Carbon\Carbon::parse($this->created_at);
        return [
            'demandeur_id' => $this->id,
            'first_name' => $this->firstName??"",
            'last_name'=> $this->lastName??"",
            'phone'=> $this->phone??"",
            'email'=> $this->email??"",
            'address'=> $this->address??"",
            'country'=> $this->countory->name??"",
            'country_id'=> $this->countory->id??0,
            'image'=> $this->image??"",
            'gender'=> (int)$this->gender ?? 0,
            'description'=> $this->description??"",
            'member_since'=> $date->diffForHumans() ??"",
            'total_hire_jobber' => $this->totalHireJobber(),
            'active_jobs' => $this->activeJobs(),
            'total_review' => $this->totalReview(),
            'rating' => $this->rating(),
//            'reviews' => ReviewsCollection::collection($this->reviews()) ,
        ];
    }
}
