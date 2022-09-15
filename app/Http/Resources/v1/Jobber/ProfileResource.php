<?php

namespace App\Http\Resources\v1\Jobber;

use App\JobberProfile;
use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $jobberprofile = JobberProfile::where('jobber_id','=',$this->id)->first();
        return [
            'jobber_id' => $this->id,
            'firstName' => $this->firstName??"",
            'lastName'=> $this->lastName??"",
            'phone'=> $this->phone??"",
            'email'=> $this->email??"",
            'address'=> $this->address??"",
            'country'=> $this->countory->name??"",
            'image'=> $this->image??"",
            'gender'=> $this->gender??"",
            'description'=> $this->description??"",
            'hours'=> $this->hours??"",
            'total_hours'=> $this->total_hours??"",
            'member_since'=> \Carbon\Carbon::parse($this->created_at)??"",
            'experince'=> $this->experince??"",
            'total_jobs' => 80,
            'completed_jobs' => 200,
            'cancel_jobs' => 5,
            'equipements' => $jobberprofile->equipement1 . ' , '.  $jobberprofile->equipement2. ' , '.  $jobberprofile->equipement3. ' , '.  $jobberprofile->equipement4. ' , '.  $jobberprofile->equipement5. ' , '.  $jobberprofile->equipement6. ' , '.  $jobberprofile->equipement7. ' , '.  $jobberprofile->equipement8. ' , '.  $jobberprofile->equipement9. ' , '.  $jobberprofile->equipement10. ' , '.  $jobberprofile->equipement11. ' , '.  $jobberprofile->equipement12. ' , '.  $jobberprofile->equipement13. ' , '.  $jobberprofile->equipement14. ' , '.  $jobberprofile->equipement15. ' , '.  $jobberprofile->equipement16,
            'engagments' => $jobberprofile->eng1 . ' , '.  $jobberprofile->eng2. ' , '.  $jobberprofile->eng3. ' , '.  $jobberprofile->eng4. ' , '.  $jobberprofile->eng5. ' , '.  $jobberprofile->eng6. ' , '.  $jobberprofile->eng7. ' , '.  $jobberprofile->eng8. ' , '.  $jobberprofile->eng9. ' , '.  $jobberprofile->eng10. ' , '.  $jobberprofile->eng11. ' , '.  $jobberprofile->eng12. ' , '.  $jobberprofile->eng13. ' , '.  $jobberprofile->eng14. ' , '.  $jobberprofile->eng15. ' , '.  $jobberprofile->eng16,
            'personal_description' => $jobberprofile->personal_description,
            'total_review' => 20,
            'rating' => 5.0
        ];
    }
}