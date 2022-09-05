<?php

namespace App\Http\Resources\v1\AppSetting;

use Illuminate\Http\Resources\Json\JsonResource;

class AppSettingResource extends JsonResource
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
            'mainScreen' => $this->mainScreen,
            'appLogo'=> $this->appLogo,
            'jooberIntroScreen1'=> $this->jooberIntroScreen1,
            'jooberIntroScreen2'=> $this->jooberIntroScreen3,
            'jooberIntroScreen3'=> $this->jooberIntroScreen3,
            'applicantIntroScreen1'=> $this->applicantIntroScreen1,
            'applicantIntroScreen2'=> $this->applicantIntroScreen2,
            'applicantIntroScreen3'=> $this->applicantIntroScreen3,

        ];


    }
}
