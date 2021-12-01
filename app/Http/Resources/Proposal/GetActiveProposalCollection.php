<?php

namespace App\Http\Resources\Proposal;

use Illuminate\Http\Resources\Json\JsonResource;
use App\User;

class GetActiveProposalCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {     $user = User::where('id','=',$this->jobber_id)->first();

         return [
            'id' => $this->id,
            'jobber_id'=> $this->jobber_id,
            'jobRequestId'=> $this->jobRequest_id,
            'status'=> $this->status,
            'description'=> $this->description,
            'time_limit'=> $this->time_limit,
            'price'=> $this->price,
            'jobberImage'=> $user->image,
            'jobberFirstName'=>   $user->firstName,
            'jobberLastName'=>   $user->lastName,
        ];

        
    }
}
