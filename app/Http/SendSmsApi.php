<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Auth;

/**
 * Description of SMS Api
 *
 * @author 
 */
class SendSmsApi {
    
    private $key = "5cac308d81578";
    private $senderid = 'PLEDGE';
    private $type = 'text';
    private $RevertText = '---Invalid Mobile No.---';

    static function getUserNumber($phone_number, $message) {
        //self::initiateSmsActivation($phone_number, $message);
        self::initiateSmsGuzzle($phone_number, $message);
        return redirect()->back()->with('message', 'Message has been sent successfully');
    }
    // static function initiateSmsActivation($phone_number, $message) {
    //     $isError = 0;
    //     $errorMessage = true;

    //     //Preparing post parameters
    //     $postData = array(
    //         'key' => "5cac308d81578",
    //         'type' => 'text',
    //         'contacts' => $phone_number,
    //         'senderid' => 'PLEDGE',
    //         'msg' => $message,
    //     );

    //     $url = "http://sms.vinaytraders.co.in/app/smsapipost/index.php";

       
    //     $ch = curl_init();
    //     curl_setopt_array($ch, array(
    //         CURLOPT_URL => $url,
    //         CURLOPT_RETURNTRANSFER => true,
    //         CURLOPT_POST => false,
    //         CURLOPT_POSTFIELDS => $postData
    //     ));


    //     //Ignore SSL certificate verification
    //     curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    //     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


    //     //get response
    //     $output = curl_exec($ch);

    //     //Print error if any
    //     if (curl_errno($ch)) {
    //         $isError = true;
    //         $errorMessage = curl_error($ch);
    //     }
    //     curl_close($ch);


    //     if ($isError) {
    //         return array('error' => 1, 'message' => $errorMessage);
    //     } else {
    //         return array('error' => 0);
    //     }
    // }

    static function initiateSmsGuzzle($phone_number, $message) {
        $client = new Client();
        $response = $client->post('http://sms.vinaytraders.co.in/app/smsapipost/index.php', [
            'verify' => false,
            'form_params' => [
                'key' => "5cac308d81578",
                'type' => 'text',
                'contacts' => $phone_number,
                'senderid' => 'PLEDGE',
                'msg' => $message
            ],
            
        ]);
        $response = json_decode($response->getBody(), true);
    }

}
