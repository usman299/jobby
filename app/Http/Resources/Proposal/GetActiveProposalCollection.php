<?php

namespace App\Http\Resources\Proposal;

use Illuminate\Http\Resources\Json\JsonResource;

class GetActiveProposalCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
         return [
            'id' => $this->id,
            'jobber_id'=> $this->jobber_id,
            'jobRequestId'=> $this->jobRequest_id,
            'status'=> $this->status,
            'description'=> $this->description,
            'time_limit'=> $this->time_limit,
            'price'=> $this->price,
            
        ];

        
    }
}
