<?php

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
            'password' => bcrypt('password'),
            
        ]);
        User::create([
            'firstName' => "Applicant",
            'lastName' => "",
            'email' => "applicant@gmail.com",
            'role' => '2',
            'password' => bcrypt('password'),
            
        ]);
        User::create([
            'firstName' => "Jobber",
            'lastName' => "",
            'email' => "jobber@gmail.com",
            'role' => '1',
            'password' => bcrypt('password'),
            
        ]);
        

    }
}
