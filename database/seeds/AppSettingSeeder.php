<?php

use App\About;
use App\QuestionAnswer;
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

        // Setting

        About::create([
            'description' => "Nous sommes Ikae Digital, une équipe créative et professionnelle avec plus de 7 ans d'expérience chez Conception UI/UX et développement front-end. Nous apportons de la beauté au design. Nous sommes Ikae Digital, une équipe créative et professionnelle avec plus de 7 ans d'expérience chez Conception UI/UX et développement front-end. Nous apportons de la beauté au design. Nous sommes Ikae Digital, une équipe créative et professionnelle avec plus de 7 ans d'expérience chez Conception UI/UX et développement front-end. Nous apportons de la beauté au design. Nous sommes Ikae Digital, une équipe créative et professionnelle avec plus de 7 ans d'expérience chez Conception UI/UX et développement front-end. Nous apportons de la beauté au design. Nous sommes Ikae Digital, une équipe créative et professionnelle avec plus de 7 ans d'expérience chez Conception UI/UX et développement front-end. Nous apportons de la beauté au design. Nous sommes Ikae Digital, une équipe créative et professionnelle avec plus de 7 ans d'expérience chez Conception UI/UX et développement front-end. Nous apportons de la beauté au design.",
            'copyright' => "Tous les droits sont réservés.",
            'condition' => "Mister Jobby est une application de services mobiles polyvalents. Professionnellement construit avec un UX élevé pour donner à votre page
                le grand regard.",
        ]);
        QuestionAnswer::create([
            'question' => "Is this built with React ?",
            'answer' => "Some placeholder content for the first accordion panel. This panel is shown by default, thanks to the .show class.",
        ]);QuestionAnswer::create([
            'question' => "Is this a PWA?",
            'answer' => "Yes. Our item is a PWA. We have a servier worker and a manifest.json file ready and prepared for you to use the item offline.",
        ]);QuestionAnswer::create([
            'question' => "What CSS framework this theme use?",
            'answer' => "We are using the latest Bootstrap 4.",
        ]);QuestionAnswer::create([
            'question' => "Is this a WordPres Theme?",
            'answer' => "No. Our item is an HTML, CSS3, and JS Site Template. You can however convert it to a WordPress Theme.",
        ]);QuestionAnswer::create([
            'question' => "What can I do with this template?",
            'answer' => "You can make mobile websites or progressive web apps for mobile devices.",
        ]);





    }
}
