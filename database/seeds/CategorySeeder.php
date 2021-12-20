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
            'title' => "Jardinage",
            'countory_id'=> "1",
            'backColor' => "#ff4040",
            'img' => "admin/icons/002-plumber.png",

        ]);
        Category::create([
            'title' => "Livraison/Déménagement",
            'countory_id'=> "1",
            'backColor' => "#fa9905",
            'img' => "admin/icons/001-household.png",


        ]);
        Category::create([
            'title' => "Ménage",
            'backColor' => "#53a7f9",
            'countory_id'=> "1",
            'img' => "admin/icons/003-electrician.png",

        ]);
        Category::create([
            'title' => "Enfants",
            'countory_id'=> "1",
            'backColor' => "#41bd83",
            'img' => "admin/icons/004-painter.png",

        ]);
        Category::create([
            'title' => "Animaux",
            'countory_id'=> "1",
            'backColor' => "#ff4040",
            'img' => "admin/icons/002-plumber.png",

        ]);
        Category::create([
            'title' => "Informatique",
            'countory_id'=> "1",
            'backColor' => "#fa9905",
            'img' => "admin/icons/001-household.png",


        ]);
        Category::create([
            'title' => "Aide a domicile",
            'backColor' => "#53a7f9",
            'countory_id'=> "1",
            'img' => "admin/icons/003-electrician.png",

        ]);
        Category::create([
            'title' => "Cours particuliers",
            'countory_id'=> "1",
            'backColor' => "#41bd83",
            'img' => "admin/icons/004-painter.png",

        ]);
        Category::create([
            'title' => "Évenementiel",
            'countory_id'=> "1",
            'backColor' => "#ff4040",
            'img' => "admin/icons/002-plumber.png",

        ]);
        Category::create([
            'title' => "Taches administrative",
            'countory_id'=> "1",
            'backColor' => "#fa9905",
            'img' => "admin/icons/001-household.png",


        ]);
        Category::create([
            'title' => "Mécanique/Réparation",
            'backColor' => "#53a7f9",
            'countory_id'=> "1",
            'img' => "admin/icons/003-electrician.png",

        ]);


    }
}
