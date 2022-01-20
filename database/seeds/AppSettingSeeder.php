<?php

use App\About;
use App\Condition;
use App\JobFactory;
use App\QuestionAnswer;
use App\SCaseServices;
use App\Testimonial;
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
        Condition::create([
            'description1' => "﻿Mister Jobby permet de mettre en relation des clients demandeurs de services, avec des personnes disponibles, compétentes et équipées pour les réaliser. La possibilité de mettre en concurrence les jobbeurs assure un service compétent en termes de prix et de délai. Mister Jobby est un phénomène qui répond ainsi à une vraie demande tant de la part des clients en termes de bricolage, de jardinage, d'électricité, de plomberie ou encore de déménagement, qu’aux particuliers et professionnels en quête de revenus complémentaires.",
            'description2' => "﻿Mister Jobby permet de mettre en relation des clients demandeurs de services, avec des personnes disponibles, compétentes et équipées pour les réaliser. La possibilité de mettre en concurrence les jobbeurs assure un service compétent en termes de prix et de délai. Mister Jobby est un phénomène qui répond ainsi à une vraie demande tant de la part des clients en termes de bricolage, de jardinage, d'électricité, de plomberie ou encore de déménagement, qu’aux particuliers et professionnels en quête de revenus complémentaires.",
        ]);
        SCaseServices::create([
            'title' => 'Le service à domicile en toute sérénité' ,
            'title1' => 'Prestataires qualifiés',
            'title2' => 'Service encadré',
            'title3' => 'Budget respecté',
            'title4' => 'Prestations assurées',
            'img' => 'front/images/home-2-540x413.jpg',
            'description1' => 'Tous les prestataires sont vérifiés,suivis et évalués pour chaque service rendu afin de vous garantir le meilleur de satisfaction.' ,
            'description2' => 'Notre service client est à votre disposition 7j/7 pour vous assurer une expérience parfaite de la prise de commande jusqu\'à la fin de la prestation.',
            'description3' => 'Toutes les prestations sont couvertes par notre assurance AXA, qu\'il s\'agisse de dommages corporels ou matériels occasionnes chez vous, sans franchise',
            'description4' => 'Tous les prix sont définis à l\'avance, les jobbers s\'engagent à les respecter.Toutes les rémunérations sont déclenchées en ligne après votre accord',

             ]);
        Testimonial::create([
            'name' => 'Walter Williams' ,
            'destination' => 'Responsables RH',
            'image' => 'front/images/user-1-73x73.jpg',
            'description' => 'Quelques jours après la publication d\'un CV, j\'ai eu des employeurs potentiels qui m\'ont contacté. Après plusieurs entretiens, j\'ai décidé d\'accepter un poste situé à proximité.',
        ]);
        Testimonial::create([
            'name' => 'Julia Smith' ,
            'destination' => 'Web Developer',
            'image' => 'front/images/user-4-73x73.jpg',
            'description' => 'I found a job as a Web Developer and applied through my iPhone with the JobsFactory website! It’s very easy to search for jobs and apply here!',
        ]);
        Testimonial::create([
            'name' => 'Walter Williams' ,
            'destination' => 'Responsables RH',
            'image' => 'front/images/user-1-73x73.jpg',
            'description' => 'Quelques jours après la publication d\'un CV, j\'ai eu des employeurs potentiels qui m\'ont contacté. Après plusieurs entretiens, j\'ai décidé d\'accepter un poste situé à proximité.',
        ]);
        \App\Blog::create([
            'name' => '8 prédictions surprenantes sur l\'avenir du travail' ,
            'image' => 'front/images/blog-1-369x253.jpg',
            'description' => ' Il est indéniable que le paysage du travail est en train de changer. De plus en plus d\'entreprises adoptent des politiques de travail flexibles',
        ]);
        \App\Blog::create([
            'name' => 'Réussite de la recherche d\'emploi : trouver un emploi en développement des affaires' ,
            'image' => 'front/images/blog-3-369x253.jpg',
            'description' => ' Les professionnels du développement des affaires sont au cœur de toutes sortes d\'organisations, des startups aux multinationales.',
        ]);
        \App\Blog::create([
            'name' => 'Comment impressionner votre futur employeur' ,
            'image' => 'front/images/blog-2-369x253.jpg',
            'description' => ' Vous êtes engagé dans votre recherche d\'emploi et vous utilisez chaque once de votre temps libre pour parcourir les listes, écrire une couverture',
        ]);
        JobFactory::create([
            'title' => 'Obtenez l\'application JobsFactory pour votre mobile' ,
            'url1' => 'www.google.com' ,
            'url2' => 'www.google.com' ,
            'image' => 'front/images/bg-image-7.jpg' ,

            'description' => 'La recherche d\'emploi n\'a jamais été aussi facile. Vous pouvez désormais trouver un emploi correspondant à vos attentes professionnelles, postuler à des emplois et recevoir des commentaires directement sur votre mobile. Commencez votre recherche d\'emploi maintenant! ',
            ]);





    }
}
