<?php

namespace App\Http;



use App\Points;

class Helper{
    public static function pushPoints($user_id, $points,$job_id){
        $pointsTable = new Points();
        $pointsTable->user_id = $user_id;
        $pointsTable->points = $points;
        $pointsTable->job_id = $job_id;
        $pointsTable->save();
    }
}
