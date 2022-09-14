<?php

namespace App\Http\Resources\v1\Users;

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
            'category_id'=> (int)$this->category_id?? 0,
            'subcategory_id'=> (int)$this->subcategory_id?? 0,
            'role'=> $this->role,
            'gender'=> $this->gender??"",
            'description'=> $this->description??"",
            'dob'=> $this->dob??"",
        ];
    }
}
