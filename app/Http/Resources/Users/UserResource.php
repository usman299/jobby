<?php

namespace App\Http\Resources\Users;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'user_id' => $this->id,
            'firstName' => $this->firstName??"",
            'lastName'=> $this->lastName??"",
            'phone'=> $this->phone??"",
            'email'=> $this->email??"",
            'address'=> $this->address??"",
            'country'=> $this->countory->name??"",
            'postalCode'=> $this->postalCode??"",
            'image'=> $this->image??"",
            'category_id'=> $this->category_id??"",
            'subcategory_id'=> $this->subcategory_id??"",
            'role'=> $this->role,
        ];
    }
}
