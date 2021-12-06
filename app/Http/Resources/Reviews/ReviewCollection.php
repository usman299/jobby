<?php

namespace App\Http\Resources\Reviews;

use Illuminate\Http\Resources\Json\JsonResource;
use App\User;

class ReviewCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $user = User::where('id','=',$this->sender_id)->first();
        return [
            'senderFirstName'=> $user->firstName,
            'senderLastName'=> $user->lastName,
            'message'=> $this->message,
            'stars'=> $this->star,
           
        ];
    }
}
