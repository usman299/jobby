<?php

namespace App\Http\Resources\v1\Jobber;

use Illuminate\Http\Resources\Json\JsonResource;


class ReviewsCollection extends JsonResource
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
        return [
            'id'=> $this->id,
            'user_id'=> $this->applicant->id,
            'name' => $this->applicant->firstName.' '.$this->applicant->lastName??" ",
            'image'=> $this->applicant->image?? "",
            'message'=> $this->message?? "",
            'star' => (double)$this->star,
            'date' => $this->created_at->diffForHumans(),
        ];
    }
}
