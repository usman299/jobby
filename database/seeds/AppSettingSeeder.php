<?php

use Illuminate\Database\Seeder;
use App\AppSetting;
class AppSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $appSetting = new AppSetting;
        $appSetting->mainScreen = 'admin/onBoarding/main.jpg';
        $appSetting->appLogo = 'admin/onBoarding/jobby-logo.jpg';
        $appSetting->jooberIntroScreen1 = 'admin/onBoarding/jobber/pic1.png';
        $appSetting->jooberIntroScreen2 = 'admin/onBoarding/jobber/pic2.png';
        $appSetting->jooberIntroScreen3 = 'admin/onBoarding/jobber/pic3.png';
        $appSetting->applicantIntroScreen1 = 'admin/onBoarding/applicant/pic1.jpg';
        $appSetting->applicantIntroScreen2 = 'admin/onBoarding/applicant/pic2.jpg';
        $appSetting->applicantIntroScreen3 = 'admin/onBoarding/applicant/pic3.jpg';
        $appSetting->save();
    }
}
