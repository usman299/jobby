<?php

use Illuminate\Database\Seeder;
use App\JobRequest;

class JobberRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  
        JobRequest::create([
            'applicant_id' => "2",
            'category_id' => "1",
            'subcategory_id' => "1",
            'skils' => implode(',', ['Compétences1','Compétences2']),
            'title' => "Demande d'emploi 1",
            'estimate_time' => "4h",
            'max_price' => 70,
            'min_price' => 60,
            'description' => "Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua",
            'file' => "admin/avatar.jpg",
        ]);
        JobRequest::create([
            'applicant_id' => "2",
            'category_id' => "1",
            'subcategory_id' => "2",
            'skils' => implode(',', ['Compétences1','Compétences2','Compétences3']),
            'title' => "Demande d'emploi 2",
            'estimate_time' => "3h",
            'max_price' => 90,
            'min_price' => 100,
            'description' => "Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua",
            'file' => "admin/avatar.jpg",
        ]);
        JobRequest::create([
            'applicant_id' => "2",
            'category_id' => "2",
            'subcategory_id' => "1",
            'skils' => implode(',', ['Compétences1','Compétences2']),
            'title' => "Demande d'emploi 1",
            'estimate_time' => "4h",
            'max_price' => 70,
            'min_price' => 60,
            'description' => "Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua",
            'file' => "admin/avatar.jpg",
        ]);
        JobRequest::create([
            'applicant_id' => "2",
            'category_id' => "2",
            'subcategory_id' => "2",
            'skils' => implode(',', ['Compétences1','Compétences2','Compétences3']),
            'title' => "Demande d'emploi 2",
            'estimate_time' => "3h",
            'max_price' => 90,
            'min_price' => 100,
            'description' => "Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua",
            'file' => "admin/avatar.jpg",
        ]);
        JobRequest::create([
            'applicant_id' => "2",
            'category_id' => "3",
            'subcategory_id' => "1",
            'skils' =>  implode(',', ['Compétences1','Compétences2']),
            'title' => "Demande d'emploi 1",
            'estimate_time' => "4h",
            'max_price' => 70,
            'min_price' => 60,
            'description' => "Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua",
            'file' => "admin/avatar.jpg",
        ]);
        JobRequest::create([
            'applicant_id' => "2",
            'category_id' => "3",
            'subcategory_id' => "2",
            'skils' => implode(',', ['Compétences1','Compétences2','Compétences3']),
            'title' => "Demande d'emploi 2",
            'estimate_time' => "3h",
            'max_price' => 90,
            'min_price' => 100,
            'description' => "Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua",
            'file' => "admin/avatar.jpg",
        ]);
        JobRequest::create([
            'applicant_id' => "2",
            'category_id' => "4",
            'subcategory_id' => "1",
            'skils' => implode(',', ['Compétences1','Compétences2']),
            'title' => "Demande d'emploi 1",
            'estimate_time' => "4h",
            'max_price' => 70,
            'min_price' => 60,
            'description' => "Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua",
            'file' => "admin/avatar.jpg",
        ]);
        JobRequest::create([
            'applicant_id' => "2",
            'category_id' => "4",
            'subcategory_id' => "2",
            'skils' => implode(',', ['Compétences1','Compétences2','Compétences3']),
            'title' => "Demande d'emploi 2",
            'estimate_time' => "3h",
            'max_price' => 90,
            'min_price' => 100,
            'description' => "Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua",
            'file' => "admin/avatar.jpg",
        ]);
        JobRequest::create([
            'applicant_id' => "2",
            'category_id' => "5",
            'subcategory_id' => "1",
            'skils' =>  implode(',', ['Compétences1','Compétences2']),
            'title' => "Demande d'emploi 1",
            'estimate_time' => "4h",
            'max_price' => 70,
            'min_price' => 60,
            'description' => "Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua",
            'file' => "admin/avatar.jpg",
        ]);
        JobRequest::create([
            'applicant_id' => "2",
            'category_id' => "5",
            'subcategory_id' => "2",
            'skils' => implode(',', ['Compétences1','Compétences2','Compétences3']),
            'title' => "Demande d'emploi 2",
            'estimate_time' => "3h",
            'max_price' => 90,
            'min_price' => 100,
            'description' => "Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua",
            'file' => "admin/avatar.jpg",
        ]);
        JobRequest::create([
            'applicant_id' => "2",
            'category_id' => "6",
            'subcategory_id' => "1",
            'skils' =>  implode(',', ['Compétences1','Compétences2']),
            'title' => "Demande d'emploi 1",
            'estimate_time' => "4h",
            'max_price' => 70,
            'min_price' => 60,
            'description' => "Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua",
            'file' => "admin/avatar.jpg",
        ]);
        JobRequest::create([
            'applicant_id' => "2",
            'category_id' => "6",
            'subcategory_id' => "2",
            'skils' => implode(',', ['Compétences1','Compétences2','Compétences3']),
            'title' => "Demande d'emploi 2",
            'estimate_time' => "3h",
            'max_price' => 90,
            'min_price' => 100,
            'description' => "Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua",
            'file' => "admin/avatar.jpg",
        ]);
        JobRequest::create([
            'applicant_id' => "2",
            'category_id' => "7",
            'subcategory_id' => "1",
            'skils' =>  implode(',', ['Compétences1','Compétences2']),
            'title' => "Demande d'emploi 1",
            'estimate_time' => "4h",
            'max_price' => 70,
            'min_price' => 60,
            'description' => "Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua",
            'file' => "admin/avatar.jpg",
        ]);
        JobRequest::create([
            'applicant_id' => "2",
            'category_id' => "7",
            'subcategory_id' => "2",
            'skils' => implode(',', ['Compétences1','Compétences2','Compétences3']),
            'title' => "Demande d'emploi 2",
            'estimate_time' => "3h",
            'max_price' => 90,
            'min_price' => 100,
            'description' => "Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua",
            'file' => "admin/avatar.jpg",
        ]);
        JobRequest::create([
            'applicant_id' => "2",
            'category_id' => "8",
            'subcategory_id' => "1",
            'skils' =>  implode(',', ['Compétences1','Compétences2']),
            'title' => "Demande d'emploi 1",
            'estimate_time' => "4h",
            'max_price' => 70,
            'min_price' => 60,
            'description' => "Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua",
            'file' => "admin/avatar.jpg",
        ]);
        JobRequest::create([
            'applicant_id' => "2",
            'category_id' => "8",
            'subcategory_id' => "2",
            'skils' => implode(',', ['Compétences1','Compétences2','Compétences3']),
            'title' => "Demande d'emploi 2",
            'estimate_time' => "3h",
            'max_price' => 90,
            'min_price' => 100,
            'description' => "Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua",
            'file' => "admin/avatar.jpg",
        ]);
        
    }
}
