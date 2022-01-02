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
            'img' => "admin/jobby/2 Jardinage MJ-2/Tondre la pelouse.jpg",

        ]);
        SubCategory::create([
            'title' => "Taille de haie",
            'category_id' => "2",
            'countory_id'=> "1",
            'backColor' => "#335EFF",
            'img' => "admin/jobby/2 Jardinage MJ-2/Taille de haie.jpg",


        ]);
        SubCategory::create([
            'title' => "Couper un arbre",
            'category_id' => "2",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",

            'img' => "admin/jobby/2 Jardinage MJ-2/Couper un arbre.jpg",

        ]);
        SubCategory::create([
            'title' => "Débrousaillage",
            'category_id' => "2",
            'countory_id'=> "1",
            'backColor' => "#FF3933",

            'img' => "admin/jobby/2 Jardinage MJ-2/Débrouisaillage.jp.jpg",

        ]);
        SubCategory::create([
            'title' => "Désherbage",
            'category_id' => "2",
            'countory_id'=> "1",
            'backColor' => "#FF3361 ",

            'img' => "admin/jobby/2 Jardinage MJ-2/Désherbage.jpg",

        ]);
        SubCategory::create([
            'title' => "Entretien des espaces vert",
            'category_id' => "2",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/jobby/2 Jardinage MJ-2/Entretien des espaces verts.jpg",

        ]);


        SubCategory::create([
            'title' => "Entretien du gazon",
            'category_id' => "2",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/jobby/2 Jardinage MJ-2/Entretien du gazon.jpg",

        ]);
        SubCategory::create([
            'title' => "Nettoyage de terrasse",
            'category_id' => "2",
            'countory_id'=> "1",
            'backColor' => "#335EFF",
            'img' => "admin/jobby/2 Jardinage MJ-2/Nettoyage de terrasse.jpg",


        ]);
        SubCategory::create([
            'title' => "Autre job de jardinage",
            'category_id' => "2",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",

            'img' => "admin/jobby/2 Jardinage MJ-2/Autre job de jardinage.jpg",

        ]);

        SubCategory::create([
            'title' => "Aide au déménagement",
            'category_id' => "3",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/jobby/3 Livraison déménagement MJ/Aide au déménagement.jpg",

        ]);
        SubCategory::create([
            'title' => "Déplacer un meuble",
            'category_id' => "3",
            'countory_id'=> "1",
            'backColor' => "#335EFF",
            'img' => "admin/jobby/3 Livraison déménagement MJ/Déplacer un meuble.jpg",


        ]);
        SubCategory::create([
            'title' => "Déplacer de l’électroménager",
            'category_id' => "3",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",

            'img' =>"admin/jobby/3 Livraison déménagement MJ/Déplacer électroménager.jpg",

        ]);
        SubCategory::create([
            'title' => "Débarrasser des encombrants",
            'countory_id'=> "1",
            'category_id' => "3",
            'backColor' => "#FF3933",

            'img' => "admin/jobby/3 Livraison déménagement MJ/Débarasser des encombrants.jpg",

        ]);
        SubCategory::create([
            'title' => "Autre job de démagement",
            'category_id' => "3",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/jobby/3 Livraison déménagement MJ/Autre job de déménagement.jpg",

        ]);
        SubCategory::create([
            'title' => "Livrer un meuble",
            'category_id' => "3",
            'countory_id'=> "1",
            'backColor' => "#335EFF",
            'img' => "admin/jobby/3 Livraison déménagement MJ/Livrer un meuble.jpg",


        ]);
        SubCategory::create([
            'title' => "Livrer l’électroménager",
            'category_id' => "3",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",

            'img' => "admin/jobby/3 Livraison déménagement MJ/Livrer électroménager.jpg",

        ]);
        SubCategory::create([
            'title' => "Livrer plis et colis",
            'category_id' => "3",
            'countory_id'=> "1",
            'backColor' => "#FF3933",

            'img' => "admin/jobby/3 Livraison déménagement MJ/Livraison plis et colis.jpg",

        ]);
        SubCategory::create([
            'title' => "Livraison de courses",
            'category_id' => "3",
            'countory_id'=> "1",
            'backColor' => "#FF3361 ",

            'img' => "admin/jobby/3 Livraison déménagement MJ/Livraison d courses.jpg",

        ]);
        SubCategory::create([
            'title' => "Ménage à domicile",
            'category_id' => "4",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/jobby/4 Ménage MJ-2/Ménage a domicile.jpg",

        ]);


        SubCategory::create([
            'title' => "Repassage",
            'category_id' => "4",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/jobby/4 Ménage MJ-2/Repassage.jpg",

        ]);


        SubCategory::create([
            'title' => "Lavage automobile",
            'category_id' => "4",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/jobby/4 Ménage MJ-2/Lavage automobile.jpg",

        ]);
        SubCategory::create([
            'title' => "Lavage de piscine",
            'category_id' => "4",
            'countory_id'=> "1",
            'backColor' => "#335EFF",
            'img' => "admin/jobby/4 Ménage MJ-2/Lavage de piscine.jpg",


        ]);
        SubCategory::create([
            'title' => "Nettoyage de vitre",
            'category_id' => "4",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",

            'img' => "admin/jobby/4 Ménage MJ-2/Nettoyage de vitre.jpg",

        ]);

        SubCategory::create([
            'title' => "Autre job de nettoyage",
            'category_id' => "4",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/jobby/4 Ménage MJ-2/",

        ]);
        SubCategory::create([
            'title' => "Garde d’enfant",
            'category_id' => "5",
            'countory_id'=> "1",
            'backColor' => "#335EFF",
            'img' => "admin/jobby/5 Garde d'enfant/Garde d'enfant MJ-3.jpg",


        ]);
        SubCategory::create([
            'title' => "Garde de chien",
            'category_id' => "6",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",

            'img' => "admin/jobby/6 Animaux MJ/Garde de chien.jpg",

        ]);
        SubCategory::create([
            'title' => "Garde de chat",
            'countory_id'=> "1",
            'category_id' => "6",
            'backColor' => "#FF3933",

            'img' => "admin/jobby/6 Animaux MJ/Garde de chat.jpg",

        ]);
        SubCategory::create([
            'title' => "Garde d’autres animaux",
            'category_id' => "6",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/jobby/6 Animaux MJ/Garde d'animaux.jpg",

        ]);
        SubCategory::create([
            'title' => "Nettoyer mon ordinateur",
            'category_id' => "7",
            'countory_id'=> "1",
            'backColor' => "#335EFF",
            'img' => "admin/jobby/7 Informatique MJ/Nettoyer réparer mon téléphone.jpg",


        ]);
        SubCategory::create([
            'title' => "Cours d’informatique",
            'category_id' => "7",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",

            'img' =>"admin/jobby/7 Informatique MJ/Cours informatique.jpg",

        ]);
        SubCategory::create([
            'title' => "Installer une imprimante",
            'category_id' => "7",
            'countory_id'=> "1",
            'backColor' => "#FF3933",

            'img' => "admin/jobby/7 Informatique MJ/Installer une imprimante.jpg",

        ]);
        SubCategory::create([
            'title' => "Autre job d’informatique",
            'category_id' => "7",
            'countory_id'=> "1",
            'backColor' => "#FF3361 ",

            'img' => "admin/jobby/7 Informatique MJ/",

        ]);
        SubCategory::create([
            'title' => "Maintien à domicile",
            'category_id' => "8",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/jobby/8 Aide à la personne  Mister jobby/Maintien a domicile.jpg",

        ]);

        SubCategory::create([
            'title' => "Livraison de médicaments",
            'category_id' => "8",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/jobby/8 Aide à la personne  Mister jobby/Livraison de médicaments.jpg",

        ]);
        SubCategory::create([
            'title' => "Faire/Livrer des courses",
            'category_id' => "8",
            'countory_id'=> "1",
            'backColor' => "#335EFF",
            'img' => "admin/jobby/8 Aide à la personne  Mister jobby/Faire livrer des courses.jpg",


        ]);
        SubCategory::create([
            'title' => "Livraison à domicile",
            'category_id' => "8",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",

            'img' => "admin/jobby/8 Aide à la personne  Mister jobby/Livraison à domicile .jpg",

        ]);
        SubCategory::create([
            'title' => "Accompagnement en course",
            'category_id' => "8",
            'countory_id'=> "1",
            'backColor' => "#FF3933",

            'img' => "admin/jobby/8 Aide à la personne  Mister jobby/Accompagnement en course.jpg",

        ]);
        SubCategory::create([
            'title' => "Accompagnement aux rendez-vous médicaux",
            'category_id' => "8",
            'countory_id'=> "1",
            'backColor' => "#FF3361 ",

            'img' => "admin/jobby/8 Aide à la personne  Mister jobby/Accompagnement aux rendezvous médicaux.jpg",

        ]);
        SubCategory::create([
            'title' => "Préparer des repas",
            'category_id' => "8",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/jobby/8 Aide à la personne  Mister jobby/Préparer des repas.jpg",

        ]);


        SubCategory::create([
            'title' => "Serveur/Serveuse",
            'category_id' => "8",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/jobby/8 Aide à la personne  Mister jobby/Serveur_Serveuse.jpg",

        ]);


        SubCategory::create([
            'title' => "Retouche couture",
            'category_id' => "8",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/jobby/8 Aide à la personne  Mister jobby/Retouche couture.jpg",

        ]);
        SubCategory::create([
            'title' => "Français",
            'category_id' => "9",
            'countory_id'=> "1",
            'backColor' => "#335EFF",
            'img' => "admin/jobby/9 Cours particulier mister jobby/Français.jpg",


        ]);
        SubCategory::create([
            'title' => "Anglais",
            'category_id' => "9",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",

            'img' => "admin/jobby/9 Cours particulier mister jobby/Anglais.jpg",

        ]);

        SubCategory::create([
            'title' => "Espagnol",
            'category_id' => "9",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/jobby/9 Cours particulier mister jobby/Espagnol.jpg",

        ]);
        SubCategory::create([
            'title' => "Créole",
            'category_id' => "9",
            'countory_id'=> "1",
            'backColor' => "#335EFF",
            'img' => "admin/jobby/9 Cours particulier mister jobby/Créole.jpg",


        ]);
        SubCategory::create([
            'title' => "Mathématique",
            'category_id' => "9",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",

            'img' => "admin/jobby/9 Cours particulier mister jobby/Math.jpg",

        ]);
        SubCategory::create([
            'title' => "Histoire",
            'countory_id'=> "1",
            'category_id' => "9",
            'backColor' => "#FF3933",

            'img' => "admin/jobby/9 Cours particulier mister jobby/Histoire.jpg",

        ]);
        SubCategory::create([
            'title' => "Géographie",
            'category_id' => "9",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/jobby/9 Cours particulier mister jobby/géographie.jpg",

        ]);
        SubCategory::create([
            'title' => "Philosophie",
            'category_id' => "9",
            'countory_id'=> "1",
            'backColor' => "#335EFF",
            'img' => "admin/jobby/9 Cours particulier mister jobby/Philosophie.jpg",


        ]);
        SubCategory::create([
            'title' => "Science de l’ingénieur",
            'category_id' => "9",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",

            'img' => "admin/jobby/9 Cours particulier mister jobby/Sciences de l'ingénieur.jpg",

        ]);
        SubCategory::create([
            'title' => "SVT",
            'category_id' => "9",
            'countory_id'=> "1",
            'backColor' => "#FF3933",

            'img' => "admin/jobby/9 Cours particulier mister jobby/SVT.jpg",

        ]);
        SubCategory::create([
            'title' => "Physique",
            'category_id' => "9",
            'countory_id'=> "1",
            'backColor' => "#FF3361 ",

            'img' => "admin/jobby/9 Cours particulier mister jobby/Physique.jpg",

        ]);
        SubCategory::create([
            'title' => "Chimie",
            'category_id' => "9",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/jobby/9 Cours particulier mister jobby/Chimie.jpg",

        ]);


        SubCategory::create([
            'title' => "SES",
            'category_id' => "9",
            'countory_id'=> "2",
            'backColor' => "#FFAF33",
            'img' => "admin/jobby/9 Cours particulier mister jobby/SES.jpg",

        ]);
        SubCategory::create([
            'title' => "Arts plastiques",
            'category_id' => "9",
            'countory_id'=> "1",
            'backColor' => "#335EFF",
            'img' => "admin/jobby/9 Cours particulier mister jobby/Art plastique.jpg",


        ]);
        SubCategory::create([
            'title' => "Education musicale",
            'category_id' => "9",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",

            'img' => "admin/jobby/9 Cours particulier mister jobby/Musique.jpg",

        ]);

        SubCategory::create([
            'title' => "Photographie",
            'category_id' => "10",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' =>"admin/jobby/10 Évènementiel Mister Jobby/Photographie .jpg",

        ]);
        SubCategory::create([
            'title' => "Chef à domicile",
            'category_id' => "10",
            'countory_id'=> "1",
            'backColor' => "#335EFF",
            'img' => "admin/jobby/10 Évènementiel Mister Jobby/Chef a domicile.jpg",


        ]);
        SubCategory::create([
            'title' => "Barman",
            'category_id' => "10",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",

            'img' => "admin/jobby/10 Évènementiel Mister Jobby/Barman.jpg",

        ]);
        SubCategory::create([
            'title' => "Serveur",
            'countory_id'=> "1",
            'category_id' => "10",
            'backColor' => "#FF3933",

            'img' => "admin/jobby/10 Évènementiel Mister Jobby/Serveur.jpg",
        ]);
        SubCategory::create([
            'title' => "DJ",
            'category_id' => "10",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/jobby/10 Évènementiel Mister Jobby/DJ.jpg",

        ]);
        SubCategory::create([
            'title' => "Animateur",
            'category_id' => "10",
            'countory_id'=> "1",
            'backColor' => "#335EFF",
            'img' => "admin/jobby/10 Évènementiel Mister Jobby/Animateur.jpg",


        ]);
        SubCategory::create([
            'title' => "Distribution de flyers",
            'category_id' => "10",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",

            'img' => "admin/jobby/10 Évènementiel Mister Jobby/Distribution de flyers.jpg",

        ]);
        SubCategory::create([
            'title' => "Hôte/Hôtesse d’accueil",
            'category_id' => "10",
            'countory_id'=> "1",
            'backColor' => "#FF3933",

            'img' => "admin/jobby/10 Évènementiel Mister Jobby/Décoratrice.jpg",

        ]);
        SubCategory::create([
            'title' => "Tâche administratives",
            'category_id' => "11",
            'countory_id'=> "1",
            'backColor' => "#FF3933",

            'img' => "admin/jobby/11 Taches admin/Tâche administratives mister jobby.jpg",

        ]);
        SubCategory::create([
            'title' => "Véhicule entretien",
            'category_id' => "12",
            'countory_id'=> "1",
            'backColor' => "#FF3361 ",

            'img' => "admin/jobby/12 Mécanique réparation mister jobby/Véhicule entretien.jpg",

        ]);
        SubCategory::create([
            'title' => "Véhicule Réparation",
            'category_id' => "12",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/jobby/12 Mécanique réparation mister jobby/Véhicule réparation.jpg",

        ]);


        SubCategory::create([
            'title' => "Réparation / Dépannage",
            'category_id' => "12",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' =>"admin/jobby/12 Mécanique réparation mister jobby/Réparation Dépanage.jpg",

        ]);



    }


}
