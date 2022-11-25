<?php

namespace App\Http;

use App\Notfication;

class NotificationHelper{

    public static function pushNotification($msg, $fcm_token, $activity){
        $SERVER_API_KEY = 'AAAAWznrMC0:APA91bGmwFHEF2awtLaUTbVbTlDDI4SxOLy5lVTr_HwF1BkWKjJ83Rp9OYO02VJh47LGRDzUolzAsE2jUoHWcShhjRJsq42VyH1N2ZTiKusu-Z63_8O8JRbgF0_9hAbfRcY6Rbz3Psin';
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
    public static function pushNotificationJobber($msg, $fcm_token, $activity){
        $SERVER_API_KEY = 'AAAAK7CUlFY:APA91bHS5gbgDbTFFlkSnop4nXq3wJn3p8CGNpUr5GBRG7IHc2z8V8jrEm59_p41xYR5P81YCyHoYY1Nysxcd6wIMLXIyNfyGtruob69gETHqvVel7moY9yNSgyA9tr9eqQ8Ktff7gFr';
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
dd($response);
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
