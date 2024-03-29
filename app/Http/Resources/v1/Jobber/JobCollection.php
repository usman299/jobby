<?php

namespace App\Http\Resources\v1\Jobber;

use App\Http\Resources\v1\Applicant\DemProfileResource;
use App\Http\Resources\v1\Users\UserResource;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

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
            'childcategory_id' => (int)isset($this->childcategory->id) ? $this->childcategory->id : 0,
            'subcategory_id' => (int)isset($this->subcategory->id) ? $this->subcategory->id : 0,
            'category_id' => (int)isset($this->category->id) ? $this->category->id : 0,
            'detail_description' => $this->detail_description??"",
            'description' => $this->description??"",
            'category_title' => $this->category->title??"",
            'subcategory_title' => $this->subcategory->title??"",
            'distance' => (string)$this->distance()??"",
            'estimate_budget' => (string)$this->estimate_budget??"",
            'time_difference' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->diffInMinutes(\Carbon\Carbon::now()),
            'duration' => $this->duration??"",
            'service_date' => ucwords($this->service_date->translatedFormat('l d F'))??"",
            'date' => $this->service_date->format('Y-m-d')??"",
            'views' => $this->totalViews(),
            'is_applied' => $this->isApplied(),
            'total_offers' => $this->totalOffers(),
            'urgent' => $this->urgent == 'true' ? 1 : 0,
            'latitude' => $this->lat??"",
            'longitude' => $this->long??"",
            'created_at' => $date->diffForHumans(),
            'country' => $this->country->name??"",
            'start_time' => $this->start_time??"00:00",
            'end_time' => $this->end_time??"00:00",
            'jobbers' => (int)$this->jobbers??1,
            'hours' => $this->hours??"",
            'status' => (int)$this->status,
            'address' => $this->address??"",
            'phone' => $this->subcategory->img??"",
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
            'demander' => new DemProfileResource($this->applicant),
        ];
    }
}
