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
            'img' => "admin/subcategory/b10.jpeg",

        ]);

        Category::create([
            'title' => "Jardinage",
            'countory_id'=> "1",
            'backColor' => "#ff4040",
            'img' => "admin/subcategory/b11.jpeg",

        ]);
        Category::create([
            'title' => "Livraison/Déménagement",
            'countory_id'=> "1",
            'backColor' => "#fa9905",
            'img' => "admin/subcategory/b12.jpeg",


        ]);
        Category::create([
            'title' => "Ménage",
            'backColor' => "#53a7f9",
            'countory_id'=> "1",
            'img' => "admin/subcategory/b13.jpeg",

        ]);
        Category::create([
            'title' => "Enfants",
            'countory_id'=> "1",
            'backColor' => "#41bd83",
            'img' => "admin/subcategory/b14.jpeg",

        ]);
        Category::create([
            'title' => "Animaux",
            'countory_id'=> "1",
            'backColor' => "#ff4040",
            'img' => "admin/subcategory/b15.jpeg",

        ]);
        Category::create([
            'title' => "Informatique",
            'countory_id'=> "1",
            'backColor' => "#fa9905",
            'img' => "admin/subcategory/b16.jpeg",


        ]);
        Category::create([
            'title' => "Aide a domicile",
            'backColor' => "#53a7f9",
            'countory_id'=> "1",
            'img' => "admin/subcategory/b12.jpeg",

        ]);
        Category::create([
            'title' => "Cours particuliers",
            'countory_id'=> "1",
            'backColor' => "#41bd83",
            'img' => "admin/icons/courses.jpeg",

        ]);
        Category::create([
            'title' => "Évenementiel",
            'countory_id'=> "1",
            'backColor' => "#ff4040",
            'img' => "admin/subcategory/b5.jpeg",

        ]);
        Category::create([
            'title' => "Taches administrative",
            'countory_id'=> "1",
            'backColor' => "#fa9905",
            'img' => "admin/subcategory/b7.jpeg",


        ]);
        Category::create([
            'title' => "Mécanique/Réparation",
            'backColor' => "#53a7f9",
            'countory_id'=> "1",
            'img' => "admin/subcategory/b5.jpeg",

        ]);


    }
}
