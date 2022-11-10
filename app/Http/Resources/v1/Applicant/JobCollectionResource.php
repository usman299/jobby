<?php

namespace App\Http\Resources\v1\Applicant;

use App\Http\Resources\v1\Users\UserResource;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class JobCollectionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        Carbon::setLocale('fr');
        $date = Carbon::parse($this->created_at);
        return [
            'id' => $this->id,
            'title' => $this->title ?? "",
            'category_id' => (int)$this->category_id ?? 0,
            'subcategory_id' => (int)$this->subcategory_id ?? 0,
            'childcategory_id' => (int)$this->childcategory_id ?? 0,
            'image' => $this->category->img ?? "",
            'description' => $this->description ?? "",
            'detail_description' => $this->detail_description ?? "",
            'estimate_budget' => (string)$this->estimate_budget,
            'duration' => $this->duration ?? "",
            'service_date' => ucwords($this->service_date->translatedFormat('l d F'))??"",
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
            'is_hired' => $this->isHired(),
            'pickup_address' => $this->pickup_address ?? "",
            'destination_address' => $this->destination_address ?? "",
            'dob' => $this->dob ?? "",
            'total_offers' => $this->totalOffers(),
            'jobber_required' => $this->jobber ?? 1,
            'total_comments' => $this->totalComments(),
        ];
    }
}
