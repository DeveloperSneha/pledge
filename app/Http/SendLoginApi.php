<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http;

class SendLoginApi {

    static function sendLoginNotification($data) {
        return self::initiateTestabApi($data);
    }

    static function initiateTestabApi($data) {
        $filterData = $data;
        // $filterData = json_encode($filterData);
        // print_r($filterData);
        $key = 'wsyiCTwvHvx1iOM';
        $token="B04C170CaC11a8751aC7";
        $compCode ="0422000";


        $secretKey = hex2bin(md5($key));
        $initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
        /* Open module and Create IV (Intialization Vector) */
        $openMode = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '','cbc', '');
        $blockSize = mcrypt_get_block_size(MCRYPT_RIJNDAEL_128, 'cbc');
        $plainPad = self::pkcs5_pad($filterData, $blockSize);
        /* Initialize encryption handle */
        if (mcrypt_generic_init($openMode, $secretKey, $initVector) != -1)
        {
        }
        /* Encrypt data */
        $encryptedText = mcrypt_generic($openMode, $plainPad);
        // dd($encryptedText);
             mcrypt_generic_deinit($openMode);
        $filterData =   bin2hex($encryptedText);
        // $ch = curl_init();
        
        $headers= array('Content-Type: application/json','Accept:
        application/json;charset=utf-8','accessToken: '.$token);
        $url = 'https://wheeboxuat.com/wheeboxAPI_v2/authenticate/'.$compCode.'/'.$filterData.'/'.$token.'';
        // dd($url);
        // $url ="https://wheeboxuat.com/wheeboxAPI_v2/registration/0422000?val=".$filterData;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $filterData);
        $server_output = curl_exec($ch);
        dd($server_output);
        return $result;
    }

    static function pkcs5_pad ($text, $blocksize)
    {
        $pad = $blocksize - (strlen($text) % $blocksize);
        return $text . str_repeat(chr($pad), $pad);
    }

}