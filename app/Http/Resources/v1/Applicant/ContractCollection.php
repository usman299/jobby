<?php

namespace App\Http\Resources\v1\Applicant;

use App\Http\Resources\v1\Jobber\ProfileResource;
use App\Http\Resources\v1\Jobber\ReviewsCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class ContractCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {     \Carbon\Carbon::setLocale('fr');
        return [
            'id'=> $this->id,
            'job'=> 'job',
            'jobberProfile' => new ProfileResource($this->jober_id),
            'status'=> $this->status ?? 0,
            'date' => $this->created_at->diffForHumans(),
        ];
    }
}
