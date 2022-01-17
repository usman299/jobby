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
            'img' => "admin/jobby/1 Bricolage/1 Aménagement MJ/Assemblage de meubles.jpg",

        ]);

        Category::create([
            'title' => "Jardinage",
            'countory_id'=> "1",
            'backColor' => "#ff4040",
            'img' => "admin/jobby/2 Jardinage MJ-2/Taille de haie.jpg",

        ]);
        Category::create([
            'title' => "Livraison / Déménagement",
            'countory_id'=> "1",
            'backColor' => "#fa9905",
            'img' => "admin/jobby/3 Livraison déménagement MJ/Aide au déménagement.jpg",


        ]);
        Category::create([
            'title' => "Ménage",
            'backColor' => "#53a7f9",
            'countory_id'=> "1",
            'img' => "admin/jobby/4 Ménage MJ-2/Ménage a domicile.jpg",

        ]);
        Category::create([
            'title' => "Enfants",
            'countory_id'=> "1",
            'backColor' => "#41bd83",
            'img' => "admin/jobby/5 Garde d'enfant/Garde d'enfant MJ-3.jpg",

        ]);
        Category::create([
            'title' => "Animaux",
            'countory_id'=> "1",
            'backColor' => "#ff4040",
            'img' => "admin/jobby/6 Animaux MJ/Garde de chien.jpg",

        ]);
        Category::create([
            'title' => "Informatique",
            'countory_id'=> "1",
            'backColor' => "#fa9905",
            'img' => "admin/jobby/7 Informatique MJ/Installer une imprimante.jpg",


        ]);
        Category::create([
            'title' => "Aide a domicile",
            'backColor' => "#53a7f9",
            'countory_id'=> "1",
            'img' => "admin/jobby/8 Aide à la personne  Mister jobby/Livraison de médicaments.jpg",

        ]);
        Category::create([
            'title' => "Cours particuliers",
            'countory_id'=> "1",
            'backColor' => "#41bd83",
            'img' => "admin/jobby/9 Cours particulier mister jobby/Anglais.jpg",

        ]);
        Category::create([
            'title' => "Évenementiel",
            'countory_id'=> "1",
            'backColor' => "#ff4040",
            'img' => "admin/jobby/10 Évènementiel Mister Jobby/Photographie .jpg",

        ]);
        Category::create([
            'title' => "Taches administrative",
            'countory_id'=> "1",
            'backColor' => "#fa9905",
            'img' => "admin/jobby/Tâche administratives mister jobby.jpg",


        ]);
        Category::create([
            'title' => "Mécanique/Réparation",
            'backColor' => "#53a7f9",
            'countory_id'=> "1",
            'img' => "admin/jobby/12 Mécanique réparation mister jobby/Réparation Dépanage.jpg",

        ]);


    }
}
