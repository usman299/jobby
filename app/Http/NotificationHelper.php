<?php

namespace App\Http;

use App\Notfication;

class NotificationHelper{

    public static function pushNotification($msg, $fcm_token, $activity, $post_id=null, $otherusername=null, $image=null){
        $url = 'https://fcm.googleapis.com/fcm/send';
        $fields = array (
            'registration_ids' => array (
                $fcm_token
            ),
            'notification' => array (
                "type" =>$activity,
                "body" => $msg,
                "post_id"=>$post_id,
                "otherusername"=>$otherusername,
                "image"=>$image,
            )
        );
        $fields = json_encode($fields);
        $headers = array (
            'Authorization: key=' . "AAAArtlB-KE:APA91bFVLEUan-vwsJjo_3U-Ajt32d--asVQV2RWg8b2Yz0OoMxjGLLozM94nA-XMkXQZtqRLEJvtfCXEzQH4DXHqTEx-yt-MIIElnKS6Arq4F5J1PkOZQ5jZAZHgxjHeuTqaxxoJBHE",
            'Content-Type: application/json'
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url );
        curl_setopt($ch, CURLOPT_POST, true );
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields );
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
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
