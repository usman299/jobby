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
            'title' => "Bricolage",
            'countory_id'=> "1",
            'backColor' => "#ff4040",
            'img' => "admin/icons/002-plumber.png",

            ]);
            Category::create([
                'title' => "Aide ménagère",
                'backColor' => "#53a7f9",
                'countory_id'=> "1",
                'img' => "admin/icons/003-electrician.png",

                ]);
            Category::create([
                'title' => "Garde",
                'countory_id'=> "1",
                'backColor' => "#41bd83",
                'img' => "admin/icons/004-painter.png",

                ]);
        Category::create([
            'title' => "Autres",
            'countory_id'=> "1",
            'backColor' => "#fa9905",
            'img' => "admin/icons/001-household.png",


        ]);

    }
}
