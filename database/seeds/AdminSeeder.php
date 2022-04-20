<?php

use App\UserMail;
use Illuminate\Database\Seeder;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'firstName' => "Admin",
            'lastName' => "",
            'email' => "admin@gmail.com",
            'role' => '0',
            'avatar' => '0',
            'check'=>'0',
            'password' => bcrypt('password'),

        ]);
        User::create([
            'firstName' => "Demandeur",
            'lastName' => "Demandeur",
            'email' => "demandeur@gmail.com",
            'role' => '2',
            'country' => '1',
            'avatar' => '0',
            'password' => bcrypt('password'),
            'email_verified_at' => "2022-04-14 14:49:23",

        ]);
        User::create([
            'firstName' => "Jobber",
            'lastName' => "Jobber",
            'email' => "jobber@gmail.com",
            'role' => '1',
            'country' => '1',
            'avatar' => '0',
            'check'=>'1',
            'category_id' => '1',
            'subcategory_id' => '1',
            'skills' => '[]',
            'password' => bcrypt('password'),
            'email_verified_at' => "2022-04-14 14:49:23",

        ]);

        \App\JobberProfile::create([
            'jobber_id' => '3',
            'jobber_category_id' => 'Électricité et domotique',
            'diploma' => 'Non',
            'experince' => 'J’ai plus de 5 ans',
            'personal_description' => 'ddssdsdsd ddssdsdsd ddssdsdsd ddssdsdsd ddssdsdsd ddssdsdsd ddssdsdsd',
            'equipement1' => 'test1',
            'equipement2' => 'test2',
            'eng1' => 'test1',
            'eng2' => 'test2',
        ]);

        UserMail::create([
            'title' => 'Bienvenue sur Mister Jobby',
            'url' => 'www.google.com',
            'description1' => 'le bon jobbeur, pour le bon service au bon prix',
            'description2' => 'Lorem Ipsum est simplement un texte factice de l\'impression industrie de la composition. Lorem Ipsum a été le texte standard de l\'industrie depuis que quand une empreinte inconnue',

        ]);


    }
}
