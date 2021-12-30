<?php

use Illuminate\Database\Seeder;
use App\ChildCategory;

class ChildCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        ChildCategory::create([
            'title' => "Assemblage de meuble",
            'category_id' => "1",
            'subcategory_id' => "1",
            'countory_id'=> "1",
            'backColor' => "#FF3361 ",

            'img' => "admin/jobby/1 Bricolage/1 Aménagement MJ/Assemblage de meubles.jpg",

        ]);
        ChildCategory::create([
            'title' => "Démontage de meuble",
            'category_id' => "1",
            'subcategory_id' => "1",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/jobby/1 Bricolage/1 Aménagement MJ/Démontage de meubles.jpg",

        ]);
        ChildCategory::create([
            'title' => "Pose de tringle de rideaux",
            'category_id' => "1",
            'subcategory_id' => "1",
            'countory_id'=> "1",
            'backColor' => "#335EFF",
            'img' => "admin/jobby/1 Bricolage/1 Aménagement MJ/Pose de tringle de rideaux.jpg",


        ]);
        ChildCategory::create([
            'title' => "Fixation d’étagères",
            'category_id' => "1",
            'subcategory_id' => "1",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",

            'img' => "admin/jobby/1 Bricolage/1 Aménagement MJ/Fixation  d'étagère.jpg",

        ]);
        ChildCategory::create([
            'title' => "Accrocher un TV au mur",
            'category_id' => "1",
            'subcategory_id' => "1",
            'countory_id'=> "1",
            'backColor' => "#FF3933",

            'img' => "admin/jobby/1 Bricolage/1 Aménagement MJ/Accrocher TV au mur.jpg",

        ]);
        ChildCategory::create([
            'title' => "Pose de paroi de douche",
            'category_id' => "1",
            'subcategory_id' => "1",
            'countory_id'=> "1",
            'backColor' => "#FF3361 ",

            'img' => "admin/jobby/1 Bricolage/1 Aménagement MJ/Pose de paroi de douche.jpg",

        ]);
        ChildCategory::create([
            'title' => "Accrocher un tableau",
            'category_id' => "1",
            'subcategory_id' => "1",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/jobby/1 Bricolage/1 Aménagement MJ/Accrocher un tableau.jpg",

        ]);
        ChildCategory::create([
            'title' => "Pose de miroir",
            'category_id' => "1",
            'subcategory_id' => "1",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/jobby/1 Bricolage/1 Aménagement MJ/Pose de miroir.jpg",

        ]);
        ChildCategory::create([
            'title' => "Réparation de meuble",
            'category_id' => "1",
            'subcategory_id' => "1",
            'countory_id'=> "1",
            'backColor' => "#335EFF",
            'img' => "admin/jobby/1 Bricolage/1 Aménagement MJ/Réparation de meubles.jpg",


        ]);
        ChildCategory::create([
            'title' => "Petite réparation",
            'category_id' => "1",
            'subcategory_id' => "1",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",

            'img' =>"admin/jobby/1 Bricolage/1 Aménagement MJ/Petite réparation .jpg",

        ]);
        ChildCategory::create([
            'title' => "Pose de cloture extérieure",
            'category_id' => "1",
            'subcategory_id' => "1",
            'countory_id'=> "1",
            'backColor' => "#FF3933",

            'img' => "admin/jobby/1 Bricolage/1 Aménagement MJ/Pose de cloture extérieur.jpg",

        ]);

        ChildCategory::create([
            'title' => "Pose de hotte aspirante",
            'category_id' => "1",
            'subcategory_id' => "1",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/jobby/1 Bricolage/1 Aménagement MJ/Pose de hotte aspirante.jpg",

        ]);
        ChildCategory::create([
            'title' => "Autre job d’aménagement",
            'category_id' => "1",
            'subcategory_id' => "1",
            'countory_id'=> "1",
            'backColor' => "#335EFF",
            'img' => "admin/jobby/1 Bricolage/1 Aménagement MJ/Autre Job d'aménagement.jpg",


        ]);
        ChildCategory::create([
            'title' => "Installation de prises électriques",
            'countory_id'=> "1",
            'subcategory_id' => "2",
            'category_id' => "1",
            'backColor' => "#FF3933",

            'img' => "admin/jobby/1 Bricolage/2 Electricité/Installation de prises.jpg",

        ]);
        ChildCategory::create([
            'title' => "Changer une ampoule",
            'category_id' => "1",
            'subcategory_id' => "2",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/jobby/1 Bricolage/2 Electricité/Changer une ampoule.jpg",

        ]);
        ChildCategory::create([
            'title' => "Pose de luminaires",
            'category_id' => "1",
            'subcategory_id' => "2",
            'countory_id'=> "1",
            'backColor' => "#335EFF",
            'img' => "admin/jobby/1 Bricolage/2 Electricité/pose luminaire.jpg",


        ]);
        ChildCategory::create([
            'title' => "Domotique",
            'category_id' => "1",
            'subcategory_id' => "2",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",

            'img' => "admin/jobby/1 Bricolage/2 Electricité/Domotique.jpg",

        ]);
        ChildCategory::create([
            'title' => "Installation d'un climatiseur",
            'category_id' => "1",
            'subcategory_id' => "2",
            'countory_id'=> "1",
            'backColor' => "#FF3933",

            'img' => "admin/jobby/1 Bricolage/2 Electricité/Installation clim.jpg",

        ]);

        ChildCategory::create([
            'title' => "Peinture intérieure",
            'category_id' => "1",
            'subcategory_id' => "3",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/jobby/1 Bricolage/3 Rénovation MJ/Peinture intérieure.jpg",

        ]);
        ChildCategory::create([
            'title' => "Pose de parquet",
            'category_id' => "1",
            'subcategory_id' => "3",
            'countory_id'=> "1",
            'backColor' => "#335EFF",
            'img' => "admin/jobby/1 Bricolage/3 Rénovation MJ/Pose de parquet .jpg",


        ]);
        ChildCategory::create([
            'title' => "Pose de dalles PVC",
            'category_id' => "1",
            'subcategory_id' => "3",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",

            'img' => "admin/jobby/1 Bricolage/3 Rénovation MJ/",

        ]);
        ChildCategory::create([
            'title' => "Pose de dalles de moquette",
            'category_id' => "1",
            'subcategory_id' => "3",
            'countory_id'=> "1",
            'backColor' => "#FF3933",

            'img' => "admin/jobby/1 Bricolage/3 Rénovation MJ/Pose de dalles moquette.jpg",

        ]);
        ChildCategory::create([
            'title' => "Enduire un mur",
            'category_id' => "1",
            'subcategory_id' => "3",
            'countory_id'=> "1",
            'backColor' => "#FF3361 ",

            'img' => "admin/jobby/1 Bricolage/3 Rénovation MJ/Enduire un mur.jpg",

        ]);
        ChildCategory::create([
            'title' => "Pose de lino",
            'category_id' => "1",
            'subcategory_id' => "3",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/jobby/1 Bricolage/3 Rénovation MJ/Pose de Lino .jpg",

        ]);


        ChildCategory::create([
            'title' => "Réparation de fuites d'eau",
            'category_id' => "1",
            'subcategory_id' => "4",
            'countory_id'=> "2",
            'backColor' => "#FFAF33",
            'img' => "admin/jobby/1 Bricolage/4 Plomberie MJ-2/Réparation fuite d'eau.jpg",

        ]);


        ChildCategory::create([
            'title' => "Changer une chasse d'eau",
            'category_id' => "1",
            'subcategory_id' => "4",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",
            'img' => "admin/jobby/1 Bricolage/4 Plomberie MJ-2/Changer une chasse d'eau.jpg",

        ]);
        ChildCategory::create([
            'title' => "Changer un robinet",
            'category_id' => "1",
            'countory_id'=> "1",
            'subcategory_id' => "4",
            'backColor' => "#335EFF",
            'img' => "admin/jobby/1 Bricolage/4 Plomberie MJ-2/Changer un robinet .jpg",


        ]);
        ChildCategory::create([
            'title' => "Déboucher un évier",
            'category_id' => "1",
            'countory_id'=> "1",
            'subcategory_id' => "4",
            'backColor' => "#FFAF33",

            'img' =>"admin/jobby/1 Bricolage/4 Plomberie MJ-2/Déboucher un évier.jpg",

        ]);

        ChildCategory::create([
            'title' => "Branchement d'une machine à laver",
            'category_id' => "1",
            'countory_id'=> "1",
            'subcategory_id' => "4",
            'backColor' => "#FFAF33",
            'img' => "admin/jobby/1 Bricolage/4 Plomberie MJ-2/Branchement d'une machine à laver.jpg",

        ]);
        ChildCategory::create([
            'title' => "Réparer une chasse d'eau",
            'category_id' => "1",
            'subcategory_id' => "4",
            'countory_id'=> "1",
            'backColor' => "#335EFF",
            'img' => "admin/jobby/1 Bricolage/4 Plomberie MJ-2/Réparer une chasse d'eau.jpg",


        ]);
        ChildCategory::create([
            'title' => "Changer une bonde de lavabo",
            'category_id' => "1",
            'subcategory_id' => "4",
            'countory_id'=> "1",
            'backColor' => "#FFAF33",

            'img' => "admin/jobby/1 Bricolage/4 Plomberie MJ-2/Changer une bonde de lavabo.jpg",

        ]);

    }
}
