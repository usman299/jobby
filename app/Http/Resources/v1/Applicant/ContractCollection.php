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
    {
        \Carbon\Carbon::setLocale('fr');
        $date = \Carbon\Carbon::parse($this->created_at);
        return [
            'id'=> $this->id,
            'price' => $this->price??"",
            'contract_no' => $this->contract_no??"",
            'hourly_rate' => $this->proposal->hours??"",
            'admin_charges' => $this->percentage??"",
            'job'=> new JobCollectionResource($this->jobRequest),
            'jobberProfile' => new ProfileResource($this->jobber),
            'status'=> $this->status ?? 0,
            'date' => $date->diffForHumans(),
        ];
    }
}
