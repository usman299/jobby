<?php

namespace App\Http;

use App\Notfication;

class NotificationHelper{

    public static function pushNotification($msg, $fcm_token, $activity){
        $SERVER_API_KEY = 'AAAAY_MYego:APA91bHuBjDm8fcxm2sPpl3hq_aFRWvd6wOzK8JkJgxorMR0n3WnjlNjGptPlURrSdmuWtxcskabFSgKRmqYXXe-GCT1ZVkfhc8NYBnpNY-flbAyOZo0roiOQZU5LXQEGoZNIn2uHpHk';
        $data = [
            "registration_ids" => $fcm_token,
            "notification" => [
                "title" => $activity,
                "body" => $msg,
            ]
        ];
        $dataString = json_encode($data);
        $headers = [
            'Authorization: key=' . $SERVER_API_KEY,
            'Content-Type: application/json',
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

        $response = curl_exec($ch);

        return $response;
    }
    public static function addtoNitification($s_id, $r_id, $msg, $generate_id, $activity, $country_id)
    {
        $notificationobj = new Notfication();
        $notificationobj->s_id = $s_id;
        $notificationobj->r_id = $r_id;
        $notificationobj->message = $msg;
        $notificationobj->generate_id = $generate_id;
        $notificationobj->activity = $activity;
        $notificationobj->country_id = $country_id;
        $notificationobj->save();
    }
}
