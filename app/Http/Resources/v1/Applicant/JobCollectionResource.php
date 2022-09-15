<?php

namespace App\Http\Resources\v1\Applicant;

use App\Http\Resources\v1\Users\UserResource;
use Illuminate\Http\Resources\Json\JsonResource;

class JobCollectionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        \Carbon\Carbon::setLocale('fr');
        $date = \Carbon\Carbon::parse($this->created_at);
        return [
            'id' => $this->id,
            'title' => $this->title ?? "",
            'image' => $this->category->img ??"",
            'detail_description' => $this->detail_description ?? "",
            'description' => $this->description ?? "",
            'estimate_budget' => (string)$this->estimate_budget,
            'duration' => $this->duration ?? "",
            'service_date' => $this->service_date->format('d-m-y'),
            'views' => $this->totalViews(),
            'latitude' => $this->lat ?? "",
            'longitude' => $this->long ?? "",
            'created_at' => $date->diffForHumans(),
            'start_time' => $this->start_time ?? "",
            'hours' => $this->hours ?? "",
            'status' => (int)$this->status,
            'address' => $this->address ?? "",
            'phone' => $this->phone ?? "",
            'image1' => $this->image1 ?? "",
            'image2' => $this->image2 ?? "",
            'image3' => $this->image3 ?? "",
            'small' => $this->small ?? "",
            'medium' => $this->medium ?? "",
            'large' => $this->large ?? "",
            'verylarge' => $this->verylarge ?? "",
            'question' => $this->question ?? "",
            'question1' => $this->question1 ?? "",
            'question2' => $this->question2 ?? "",
            'question3' => $this->question3 ?? "",
            'surface' => $this->surface ?? "",
            'count' => $this->count ?? "",
            'input' => $this->input ?? "",
            'pickup_address' => $this->pickup_address ?? "",
            'destination_address' => $this->destination_address ?? "",
            'dob' => $this->dob ?? "",
            'total_offers' => 4
        ];
    }
}
