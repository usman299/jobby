<?php

use Illuminate\Database\Seeder;
use App\AppSetting;
use App\Countory;
use App\Contract;
use App\JobberServicesOffers;
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


        Countory::create([
            'name' => "Guadeloupe",

        ]);
        Countory::create([
            'name' => "Martinique",

        ]);
        Countory::create([
            'name' => "Guyane",

        ]);
        Countory::create([
            'name' => "La Reunion",

        ]);
        Countory::create([
            'name' => "IIe de France",

        ]);
        JobberServicesOffers::create([
            'title' => "UI & Web Design using Adobe Illustrator CC",
            'img'=>"admin/slider/S2.jpg",
            'duration'=>"5 h 30 min",
            'description' => "Build professional web & appdesigns using Adobe Illustrator CC",
            'jobber_id'=> 3,
            'price'=>45,
            'country_id'=>1,
            'category_id'=>1,
            'subcategory_id'=>1,


        ]);

//        \App\Proposal::create([
//            'jobRequest_id' => 1,
//            'jobber_id'=>3,
//            'status'=>1,
//            'time_limit' => "5h 7min",
//            'price'=>45,
//            'description'=>"Build professional web & appdesigns using Adobe Illustrator CC",
//
//        ]);
//        \App\Proposal::create([
//            'jobRequest_id' => 2,
//            'jobber_id'=>3,
//            'status'=>1,
//            'time_limit' => "5h 8min",
//            'price'=>35,
//            'description'=>"Build professional web & appdesigns using Adobe Illustrator CC",
//
//        ]);
//        \App\Proposal::create([
//            'jobRequest_id' => 3,
//            'jobber_id'=>3,
//            'status'=>1,
//            'time_limit' => "8h 7min",
//            'price'=>588,
//            'description'=>"Build professional web & appdesigns using Adobe Illustrator CC",
//
//        ]);
//        \App\Proposal::create([
//            'jobRequest_id' => 4,
//            'jobber_id'=>3,
//            'status'=>1,
//            'time_limit' => "9h 7min",
//            'price'=>58,
//            'description'=>"Build professional web & appdesigns using Adobe Illustrator CC",
//
//        ]);
//        Contract::create([
//            'proposal_id' => 1,
//            'jober_id'=>3,
//            'applicant_id'=>3,
//            'e_time' => "2021-12-17",
//            'status'=> 1,
//            'price'=>45,
//            'description'=>"Build professional web & appdesigns using Adobe Illustrator CC",
//
//        ]);
//        Contract::create([
//            'proposal_id' => 2,
//            'jober_id'=>3,
//            'applicant_id'=>3,
//            'e_time' => "2021-12-14",
//            'status'=> 5,
//            'price'=>56,
//            'description'=>"Build professional web & appdesigns using Adobe Illustrator CC",
//
//        ]);
//        Contract::create([
//            'proposal_id' => 3,
//            'jober_id'=>3,
//            'applicant_id'=>3,
//            'e_time' => "2021-12-19",
//            'status'=> 3,
//            'price'=>56,
//            'description'=>"Build professional web & appdesigns using Adobe Illustrator CC",
//
//        ]);
//        Contract::create([
//            'proposal_id' => 4,
//            'jober_id'=>3,
//            'applicant_id'=>3,
//            'e_time' => "2021-12-19",
//            'status'=> 5,
//            'price'=>56,
//            'description'=>"Build professional web & appdesigns using Adobe Illustrator CC",
//
//        ]);
//        Contract::create([
//            'service_id' => 1,
//            'jober_id'=>3,
//            'applicant_id'=>3,
//            'e_time' => "2021-12-29",
//            'status'=> 1,
//            'price'=>56,
//            'description'=>"Build professional web & appdesigns using Adobe Illustrator CC",
//
//        ]);
//        Contract::create([
//            'service_id' => 2,
//            'jober_id'=>3,
//            'applicant_id'=>3,
//            'e_time' => "2021-12-15",
//            'status'=> 3,
//            'price'=>56,
//            'description'=>"Build professional web & appdesigns using Adobe Illustrator CC",
//
//        ]);
//        Contract::create([
//            'service_id' => 3,
//            'jober_id'=>3,
//            'applicant_id'=>3,
//            'e_time' => "2021-12-20",
//            'status'=> 6,
//            'price'=>56,
//            'description'=>"Build professional web & appdesigns using Adobe Illustrator CC",
//
//        ]);


    }
}
