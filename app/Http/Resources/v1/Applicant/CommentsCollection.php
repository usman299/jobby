<?php

namespace App\Http\Resources\v1\Applicant;

use Illuminate\Http\Resources\Json\JsonResource;


class CommentsCollection extends JsonResource
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
            'user_id'=> $this->user->id,
            'name' => $this->user->firstName.' '.$this->user->lastName??" ",
            'image'=> $this->user->image?? "",
            'message'=> $this->comment?? "",
            'date' => $this->created_at->diffForHumans(),
        ];
    }
}
