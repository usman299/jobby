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
            'title' => "Aménagement",
            'category_id' => "1",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/subcategory/b1.jpeg",

        ]);
        SubCategory::create([
            'title' => "Électricité",
            'category_id' => "1",
            'countory_id'=> "1",
            'backColor' => "#FF3933",

            'img' => "admin/subcategory/Bricolage _ Rénovation.jpg",

        ]);
        SubCategory::create([
            'title' => "Rénovation",
            'category_id' => "1",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/subcategory/b3.jpeg",

        ]);

        SubCategory::create([
            'title' => "Plomberie",
            'category_id' => "1",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",

            'img' => "admin/subcategory/b4.jpeg",

        ]);


        SubCategory::create([
            'title' => "Tondre la pelouse",
            'category_id' => "2",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/subcategory/Tondre la pelouse.jpg",

        ]);
        SubCategory::create([
            'title' => "Taille de haie",
            'category_id' => "2",
            'countory_id'=> "1",
            'backColor' => "#335EFF",
            'img' => "admin/subcategory/Taille de haie.jpg",


        ]);
        SubCategory::create([
            'title' => "Couper un arbre",
            'category_id' => "2",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",

            'img' => "admin/subcategory/Couper un arbre.jpg",

        ]);
        SubCategory::create([
            'title' => "Débrousaillage",
            'category_id' => "2",
            'countory_id'=> "1",
            'backColor' => "#FF3933",

            'img' => "admin/subcategory/b8.jpeg",

        ]);
        SubCategory::create([
            'title' => "Désherbage",
            'category_id' => "2",
            'countory_id'=> "1",
            'backColor' => "#FF3361 ",

            'img' => "admin/subcategory/b9.jpeg",

        ]);
        SubCategory::create([
            'title' => "Entretien des espaces vert",
            'category_id' => "2",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/subcategory/b10.jpeg",

        ]);


        SubCategory::create([
            'title' => "Entretien du gazon",
            'category_id' => "2",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/subcategory/b11.jpeg",

        ]);
        SubCategory::create([
            'title' => "Nettoyage de terrasse",
            'category_id' => "2",
            'countory_id'=> "1",
            'backColor' => "#335EFF",
            'img' => "admin/subcategory/b12.jpeg",


        ]);
        SubCategory::create([
            'title' => "Autre job de jardinage",
            'category_id' => "2",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",

            'img' => "admin/subcategory/b13.jpeg",

        ]);

        SubCategory::create([
            'title' => "Aide au déménagement",
            'category_id' => "3",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/subcategory/b14.jpeg",

        ]);
        SubCategory::create([
            'title' => "Déplacer un meuble",
            'category_id' => "3",
            'countory_id'=> "1",
            'backColor' => "#335EFF",
            'img' => "admin/subcategory/b15.jpeg",


        ]);
        SubCategory::create([
            'title' => "Déplacer de l’électroménager",
            'category_id' => "3",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",

            'img' =>"admin/subcategory/Déplacer électroménager.jpg",

        ]);
        SubCategory::create([
            'title' => "Débarrasser des encombrants",
            'countory_id'=> "1",
            'category_id' => "3",
            'backColor' => "#FF3933",

            'img' => "admin/subcategory/b17.jpeg",

        ]);
        SubCategory::create([
            'title' => "Autre job de démagement",
            'category_id' => "3",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/subcategory/b18.jpeg",

        ]);
        SubCategory::create([
            'title' => "Livrer un meuble",
            'category_id' => "3",
            'countory_id'=> "1",
            'backColor' => "#335EFF",
            'img' => "admin/subcategory/b19.jpeg",


        ]);
        SubCategory::create([
            'title' => "Livrer l’électroménager",
            'category_id' => "3",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",

            'img' => "admin/subcategory/b20.jpeg",

        ]);
        SubCategory::create([
            'title' => "Livrer plis et colis",
            'category_id' => "3",
            'countory_id'=> "1",
            'backColor' => "#FF3933",

            'img' => "admin/subcategory/b21.jpeg",

        ]);
        SubCategory::create([
            'title' => "Livraison de courses",
            'category_id' => "3",
            'countory_id'=> "1",
            'backColor' => "#FF3361 ",

            'img' => "admin/subcategory/b4.jpeg",

        ]);
        SubCategory::create([
            'title' => "Ménage à domicile",
            'category_id' => "4",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/subcategory/b5.jpeg",

        ]);


        SubCategory::create([
            'title' => "Repassage",
            'category_id' => "4",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/subcategory/Repassage.jpg",

        ]);


        SubCategory::create([
            'title' => "Lavage automobile",
            'category_id' => "4",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/subcategory/b7.jpeg",

        ]);
        SubCategory::create([
            'title' => "Lavage de piscine",
            'category_id' => "4",
            'countory_id'=> "1",
            'backColor' => "#335EFF",
            'img' => "admin/subcategory/b8.jpeg",


        ]);
        SubCategory::create([
            'title' => "Nettoyage de vitre",
            'category_id' => "4",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",

            'img' => "admin/subcategory/b9.jpeg",

        ]);

        SubCategory::create([
            'title' => "Autre job de nettoyage",
            'category_id' => "4",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/subcategory/b21.jpeg",

        ]);
        SubCategory::create([
            'title' => "Garde d’enfant",
            'category_id' => "5",
            'countory_id'=> "1",
            'backColor' => "#335EFF",
            'img' => "admin/subcategory/Garde d'enfant.jpg",


        ]);
        SubCategory::create([
            'title' => "Garde de chien",
            'category_id' => "6",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",

            'img' => "admin/subcategory/b20.jpeg",

        ]);
        SubCategory::create([
            'title' => "Garde de chat",
            'countory_id'=> "1",
            'category_id' => "6",
            'backColor' => "#FF3933",

            'img' => "admin/subcategory/b19.jpeg",

        ]);
        SubCategory::create([
            'title' => "Garde d’autres animaux",
            'category_id' => "6",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/subcategory/b17.jpeg",

        ]);
        SubCategory::create([
            'title' => "Nettoyer mon ordinateur",
            'category_id' => "7",
            'countory_id'=> "1",
            'backColor' => "#335EFF",
            'img' => "admin/subcategory/b16.jpeg",


        ]);
        SubCategory::create([
            'title' => "Cours d’informatique",
            'category_id' => "7",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",

            'img' =>"admin/subcategory/b17.jpeg",

        ]);
        SubCategory::create([
            'title' => "Installer une imprimante",
            'category_id' => "7",
            'countory_id'=> "1",
            'backColor' => "#FF3933",

            'img' => "admin/subcategory/b18.jpeg",

        ]);
        SubCategory::create([
            'title' => "Autre job d’informatique",
            'category_id' => "7",
            'countory_id'=> "1",
            'backColor' => "#FF3361 ",

            'img' => "admin/subcategory/b19.jpeg",

        ]);
        SubCategory::create([
            'title' => "Maintien à domicile",
            'category_id' => "8",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/subcategory/b11.jpeg",

        ]);

        SubCategory::create([
            'title' => "Livraison de médicaments",
            'category_id' => "8",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/subcategory/b12.jpeg",

        ]);
        SubCategory::create([
            'title' => "Faire/Livrer des courses",
            'category_id' => "8",
            'countory_id'=> "1",
            'backColor' => "#335EFF",
            'img' => "admin/subcategory/Cours particulier.jpg",


        ]);
        SubCategory::create([
            'title' => "Livraison à domicile",
            'category_id' => "8",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",

            'img' => "admin/subcategory/b14.jpeg",

        ]);
        SubCategory::create([
            'title' => "Accompagnement en course",
            'category_id' => "8",
            'countory_id'=> "1",
            'backColor' => "#FF3933",

            'img' => "admin/subcategory/Cours particulier.jpg",

        ]);
        SubCategory::create([
            'title' => "Accompagnement aux rendez-vous médicaux",
            'category_id' => "8",
            'countory_id'=> "1",
            'backColor' => "#FF3361 ",

            'img' => "admin/subcategory/b16.jpeg",

        ]);
        SubCategory::create([
            'title' => "Préparer des repas",
            'category_id' => "8",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/subcategory/b17.jpeg",

        ]);


        SubCategory::create([
            'title' => "Serveur/Serveuse",
            'category_id' => "8",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/subcategory/b18.jpeg",

        ]);


        SubCategory::create([
            'title' => "Retouche couture",
            'category_id' => "8",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/subcategory/b19.jpeg",

        ]);
        SubCategory::create([
            'title' => "Français",
            'category_id' => "9",
            'countory_id'=> "1",
            'backColor' => "#335EFF",
            'img' => "admin/subcategory/b21.jpeg",


        ]);
        SubCategory::create([
            'title' => "Anglais",
            'category_id' => "9",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",

            'img' => "admin/subcategory/b20.jpeg",

        ]);

        SubCategory::create([
            'title' => "Anglais",
            'category_id' => "9",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/subcategory/b13.jpeg",

        ]);
        SubCategory::create([
            'title' => "Créole",
            'category_id' => "9",
            'countory_id'=> "1",
            'backColor' => "#335EFF",
            'img' => "admin/subcategory/b14.jpeg",


        ]);
        SubCategory::create([
            'title' => "Mathématique",
            'category_id' => "9",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",

            'img' => "admin/subcategory/b15.jpeg",

        ]);
        SubCategory::create([
            'title' => "Histoire",
            'countory_id'=> "1",
            'category_id' => "9",
            'backColor' => "#FF3933",

            'img' => "admin/subcategory/b16.jpeg",

        ]);
        SubCategory::create([
            'title' => "Géographie",
            'category_id' => "9",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/subcategory/b17.jpeg",

        ]);
        SubCategory::create([
            'title' => "Philosophie",
            'category_id' => "9",
            'countory_id'=> "1",
            'backColor' => "#335EFF",
            'img' => "admin/subcategory/b18.jpeg",


        ]);
        SubCategory::create([
            'title' => "Science de l’ingénieur",
            'category_id' => "9",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",

            'img' => "admin/subcategory/b8.jpeg",

        ]);
        SubCategory::create([
            'title' => "SVT",
            'category_id' => "9",
            'countory_id'=> "1",
            'backColor' => "#FF3933",

            'img' => "admin/subcategory/b9.jpeg",

        ]);
        SubCategory::create([
            'title' => "Physique",
            'category_id' => "9",
            'countory_id'=> "1",
            'backColor' => "#FF3361 ",

            'img' => "admin/subcategory/b12.jpeg",

        ]);
        SubCategory::create([
            'title' => "Chimie",
            'category_id' => "9",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/subcategory/b21.jpeg",

        ]);


        SubCategory::create([
            'title' => "SES",
            'category_id' => "9",
            'countory_id'=> "2",
            'backColor' => "#FFAF33",
            'img' => "admin/subcategory/b13.jpeg",

        ]);
        SubCategory::create([
            'title' => "Arts plastiques",
            'category_id' => "9",
            'countory_id'=> "1",
            'backColor' => "#335EFF",
            'img' => "admin/subcategory/b4.jpeg",


        ]);
        SubCategory::create([
            'title' => "Education musicale",
            'category_id' => "9",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",

            'img' => "admin/subcategory/b5.jpeg",

        ]);

        SubCategory::create([
            'title' => "Photographie",
            'category_id' => "10",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' =>"admin/subcategory/b6.jpeg",

        ]);
        SubCategory::create([
            'title' => "Chef à domicile",
            'category_id' => "10",
            'countory_id'=> "1",
            'backColor' => "#335EFF",
            'img' => "admin/subcategory/b7.jpeg",


        ]);
        SubCategory::create([
            'title' => "Barman",
            'category_id' => "10",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",

            'img' => "admin/subcategory/b8.jpeg",

        ]);
        SubCategory::create([
            'title' => "Serveur",
            'countory_id'=> "1",
            'category_id' => "10",
            'backColor' => "#FF3933",

            'img' => "admin/subcategory/b9.jpeg",
        ]);
        SubCategory::create([
            'title' => "DJ",
            'category_id' => "10",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/subcategory/b1.jpeg",

        ]);
        SubCategory::create([
            'title' => "Animateur",
            'category_id' => "10",
            'countory_id'=> "1",
            'backColor' => "#335EFF",
            'img' => "admin/subcategory/b2.jpeg",


        ]);
        SubCategory::create([
            'title' => "Distribution de flyers",
            'category_id' => "10",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",

            'img' => "admin/subcategory/b3.jpeg",

        ]);
        SubCategory::create([
            'title' => "Hôte/Hôtesse d’accueil",
            'category_id' => "10",
            'countory_id'=> "1",
            'backColor' => "#FF3933",

            'img' => "admin/subcategory/b4.jpeg",

        ]);
        SubCategory::create([
            'title' => "Véhicule entretien",
            'category_id' => "12",
            'countory_id'=> "1",
            'backColor' => "#FF3361 ",

            'img' => "admin/subcategory/b5.jpeg",

        ]);
        SubCategory::create([
            'title' => "Véhicule Réparation",
            'category_id' => "12",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/subcategory/b16.jpeg",

        ]);


        SubCategory::create([
            'title' => "Réparation / Dépannage",
            'category_id' => "12",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' =>"admin/subcategory/b17.jpeg",

        ]);



    }


}
