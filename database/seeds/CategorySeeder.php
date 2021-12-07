<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Category::create([
            'title' => "Nettoyage",
            'countory_id'=> "1",
            'backColor' => "#ff4040",
            'img' => "admin/icons/002-plumber.png",

            ]);
            Category::create([
                'title' => "Ménage",
                'countory_id'=> "1",
                'backColor' => "#fa9905",
                'img' => "admin/icons/001-household.png",


                ]);
            Category::create([
                'title' => "Electricienne",
                'backColor' => "#53a7f9",
                'countory_id'=> "2",
                'img' => "admin/icons/003-electrician.png",

                ]);
            Category::create([
                'title' => "Peintre",
                'countory_id'=> "2",
                'backColor' => "#41bd83",
                'img' => "admin/icons/004-painter.png",

                ]);
            Category::create([
                'title' => "Sotierd",
                'countory_id'=> "3",
                'backColor' => "#fa9905 ",
                'img' => "admin/icons/006-makeup.png",

                ]);
            Category::create([
                'title' => "Méditation",
                'countory_id'=> "3",
                'backColor' => "#ff702c",
                'img' => "admin/icons/005-meditation.png",

                ]);
            Category::create([
                'title' => "Ménage",
                'backColor' => "#2bd2f3",
                'countory_id'=> "4",
                'img' => "admin/icons/001-household.png",

                ]);
            Category::create([
                'title' => "Annonce",
                'countory_id'=> "4",
                'backColor' => "#FFAF33",
                'img' => "admin/icons/announcement.png",

                ]);
        Category::create([
            'title' => "Méditation",
            'countory_id'=> "5",
            'backColor' => "#b740fa",
            'img' => "admin/icons/005-meditation.png",

        ]);

    }
}
