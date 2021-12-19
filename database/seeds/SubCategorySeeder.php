<?php

use Illuminate\Database\Seeder;
use App\SubCategory;
class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubCategory::create([
            'title' => "Rénovation",
            'category_id' => "1",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/icons/announcement.png",

            ]);
            SubCategory::create([
                'title' => "Entretien du jardin",
                'category_id' => "1",
                'countory_id'=> "1",
                'backColor' => "#335EFF",
                'img' => "admin/icons/001-household.png",


                ]);
                SubCategory::create([
                'title' => "Plomberie",
                'category_id' => "1",
                    'countory_id'=> "1",
                'backColor' => "#FFAF33",

                'img' => "admin/icons/003-electrician.png",

                ]);
                SubCategory::create([
                'title' => "Électricité et domotique",
                'category_id' => "1",
                    'countory_id'=> "1",
                'backColor' => "#FF3933",

                'img' => "admin/icons/004-painter.png",

                ]);
                SubCategory::create([
                'title' => "Petit bricolage",
                'category_id' => "1",
                    'countory_id'=> "1",
                'backColor' => "#FF3361 ",

                'img' => "admin/icons/006-makeup.png",

                ]);
//////////////////////////////////



        SubCategory::create([
            'title' => "Repassage",
            'category_id' => "2",
            'countory_id'=> "2",
            'backColor' => "#FFAF33",
            'img' => "admin/icons/announcement.png",

            ]);
            SubCategory::create([
                'title' => "Ménage",
                'category_id' => "2",
                'countory_id'=> "2",
                'backColor' => "#335EFF",
                'img' => "admin/icons/001-household.png",


                ]);
                SubCategory::create([
                'title' => "Garde d’enfants",
                'category_id' => "3",
                    'countory_id'=> "3",
                'backColor' => "#FFAF33",

                'img' => "admin/icons/003-electrician.png",

                ]);
                SubCategory::create([
                'title' => "Garde d’animaux",
                    'countory_id'=> "4",
                'category_id' => "3",
                'backColor' => "#FF3933",

                'img' => "admin/icons/004-painter.png",

                ]);

            SubCategory::create([
                'title' => "Aide à la personne",
                'category_id' => "4",
                'countory_id'=> "1",
                'backColor' => "#FFAF33",
                'img' => "admin/icons/announcement.png",

            ]);
            SubCategory::create([
                'title' => "Déménagement",
                'category_id' => "4",
                'countory_id'=> "1",
                'backColor' => "#335EFF",
                'img' => "admin/icons/001-household.png",


            ]);
            SubCategory::create([
                'title' => "Soutien scolaire",
                'category_id' => "4",
                'countory_id'=> "1",
                'backColor' => "#FFAF33",

                'img' => "admin/icons/003-electrician.png",

            ]);

    }


}
