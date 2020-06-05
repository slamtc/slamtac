<?php
 
namespace App\Traits;

use Illuminate\Http\Request;


trait Notifications {

   public static function sendNotfic($token,$title,$message)
   {
        //$message = trans('stitac.new_reservation');
        //$title = trans('stitac.new_reservation');
        $path_to_fcm = 'https://fcm.googleapis.com/fcm/send';
        $server_key = env('FCM_KEY', '');

        $headers = [
            'Authorization:key='.$server_key,
            'Content-Type:application/json'
        ];
       
        $fields = array('to' => $token,'notification'=>array('title' => $title, 'body'=>$message));
        $payload = json_encode($fields);

            
        $curl_session = curl_init();
        curl_setopt($curl_session,CURLOPT_URL,$path_to_fcm);
        curl_setopt($curl_session,CURLOPT_POST,true);
        curl_setopt($curl_session,CURLOPT_HTTPHEADER,$headers);
        curl_setopt($curl_session,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($curl_session,CURLOPT_SSL_VERIFYPEER ,false);
        curl_setopt($curl_session,CURLOPT_IPRESOLVE,false);
        curl_setopt($curl_session,CURLOPT_POSTFIELDS,$payload);
        $result = curl_exec($curl_session);
       // var_dump($result);
   }
  
}
