<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppSetting extends Model
{
    protected $fillable = [
        'mainScreen', 'appLogo','jooberIntroScreen1','jooberIntroScreen2','jooberIntroScreen3','applicantIntroScreen1','applicantIntroScreen2','applicantIntroScreen3',
    ];
    
    
}
