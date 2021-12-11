<?php

use Illuminate\Database\Seeder;
use App\AppSetting;
use App\Countory;
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
            'img'=>"assets/img/0ffd6s54.jpg",
            'duration'=>"5 h 30 min",
            'description' => "Build professional web & appdesigns using Adobe Illustrator CC",
            'jobber_id'=> 3,
            'price'=>45,
            'country_id'=>1,
            'category_id'=>1,
            'subcategory_id'=>1,


        ]);

        \App\JobRequest::create([
            'applicant_id' => '2',
            'category_id' => '1',
            'subcategory_id' => '1',
            'country_id' => '1',
            'title' => 'Laravel Developer',
            'estimate_time' => '5 Days',
            'max_price' => '500',
            'min_price' => '300',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        ]);
        \App\JobRequest::create([
            'applicant_id' => '2',
            'category_id' => '1',
            'subcategory_id' => '1',
            'country_id' => '1',
            'title' => 'Laravel Developer',
            'estimate_time' => '5 Days',
            'max_price' => '500',
            'min_price' => '300',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        ]);
        \App\JobRequest::create([
            'applicant_id' => '2',
            'category_id' => '1',
            'subcategory_id' => '1',
            'country_id' => '1',
            'title' => 'Laravel Developer',
            'estimate_time' => '5 Days',
            'max_price' => '500',
            'min_price' => '300',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        ]);
        \App\JobRequest::create([
            'applicant_id' => '2',
            'category_id' => '1',
            'subcategory_id' => '1',
            'country_id' => '1',
            'title' => 'Laravel Developer',
            'estimate_time' => '5 Days',
            'max_price' => '500',
            'min_price' => '300',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        ]);
        \App\JobRequest::create([
            'applicant_id' => '2',
            'category_id' => '1',
            'subcategory_id' => '1',
            'country_id' => '1',
            'title' => 'Laravel Developer',
            'estimate_time' => '5 Days',
            'max_price' => '500',
            'min_price' => '300',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        ]);
        \App\JobRequest::create([
            'applicant_id' => '2',
            'category_id' => '1',
            'subcategory_id' => '1',
            'country_id' => '1',
            'title' => 'Laravel Developer',
            'estimate_time' => '5 Days',
            'max_price' => '500',
            'min_price' => '300',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        ]);
        \App\JobRequest::create([
            'applicant_id' => '2',
            'category_id' => '1',
            'subcategory_id' => '1',
            'country_id' => '1',
            'title' => 'Laravel Developer',
            'estimate_time' => '5 Days',
            'max_price' => '500',
            'min_price' => '300',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        ]);
        \App\JobRequest::create([
            'applicant_id' => '2',
            'category_id' => '1',
            'subcategory_id' => '1',
            'country_id' => '1',
            'title' => 'Laravel Developer',
            'estimate_time' => '5 Days',
            'max_price' => '500',
            'min_price' => '300',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        ]);
        \App\JobRequest::create([
            'applicant_id' => '2',
            'category_id' => '1',
            'subcategory_id' => '1',
            'country_id' => '1',
            'title' => 'Laravel Developer',
            'estimate_time' => '5 Days',
            'max_price' => '500',
            'min_price' => '300',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        ]);
        \App\JobRequest::create([
            'applicant_id' => '2',
            'category_id' => '1',
            'subcategory_id' => '1',
            'country_id' => '1',
            'title' => 'Laravel Developer',
            'estimate_time' => '5 Days',
            'max_price' => '500',
            'min_price' => '300',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        ]);
    }
}
