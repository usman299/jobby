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
            'avatar' => '0',
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

        ]);
        User::create([
            'firstName' => "Jobber",
            'lastName' => "Jobber",
            'email' => "jobber@gmail.com",
            'role' => '1',
            'country' => '1',
            'avatar' => '0',
            'password' => bcrypt('password'),

        ]);


    }
}
