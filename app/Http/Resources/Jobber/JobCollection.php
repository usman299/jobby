<?php

namespace App\Http\Resources\Jobber;

use Illuminate\Http\Resources\Json\JsonResource;

class JobCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        \Carbon\Carbon::setLocale('fr');
        $date = \Carbon\Carbon::parse($this->created_at);
        return [
            'id' => $this->id,
            'title' => $this->title??"",
            'childcategory_id' => (int)$this->childcategory->id??0,
            'subcategory_id' => (int)$this->subcategory->id??0,
            'detail_description' => $this->detail_description??"",
            'description' => $this->description??"",
            'category_title' => $this->category->title??"",
            'subcategory_title' => $this->subcategory->title??"",
            'distance' => (string)$this->distance(),
            'estimate_budget' => (string)$this->estimate_budget,
            'time_difference' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->diffInMinutes(\Carbon\Carbon::now()),
            'duration' => $this->duration??"",
            'service_date' => $this->service_date->format('d-m-y'),
            'views' => $this->totalViews(),
            'is_applied' => $this->isApplied(),
            'urgent' => (int)$this->urgent,
            'latitude' => $this->lat??"",
            'longitude' => $this->long??"",
            'demander_image' => $this->applicant->image??"",
            'demander_first_name' => $this->applicant->firstName??"",
            'demander_last_name' => $this->applicant->lastName??"",
            'created_at' => $date->diffForHumans(),
            'country' => $this->country->name??"",
            'start_time' => $this->start_time??"",
            'hours' => $this->hours??"",
            'status' => (int)$this->status,
            'address' => $this->address??"",
            'phone' => $this->phone??"",
            'image1' => $this->image1??"",
            'image2' => $this->image2??"",
            'image3' => $this->image3??"",
            'small' => $this->small??"",
            'medium' => $this->medium??"",
            'large' => $this->large??"",
            'verylarge' => $this->verylarge??"",
            'question' => $this->question??"",
            'question1' => $this->question1??"",
            'question2' => $this->question2??"",
            'question3' => $this->question3??"",
            'surface' => $this->surface??"",
            'count' => $this->count??"",
            'input' => $this->input??"",
            'pickup_address' => $this->pickup_address??"",
            'destination_address' => $this->destination_address??"",
            'dob' => $this->dob??"",
        ];
    }
}
