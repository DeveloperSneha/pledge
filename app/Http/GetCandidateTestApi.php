<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http;

class GetCandidateTestApi {

    static function getTestNotification($data,$loginId) {
        return self::initiateTestApi($data,$loginId);
    }

    static function initiateTestApi($data,$loginId) { 
        $key = 'wsyiCTwvHvx1iOM';        
        $token="B04C170CaC11a8751aC7";
        $compCode = '0422000';
        
         
        // $filterData =2122222222;
        $filterData =$loginId;
        $testData =$data;
        $domainData ='Psychometric';
        $osr ='OR';
        // $filterData = json_encode($filterData);
        // $testData = json_encode($testData);
        // $domainData = json_encode($domainData);
        // $osr = json_encode($osr);
        // print_r($filterData);
        // dd($testData);
        //OSR encryption
        $secretKey = hex2bin(md5($key));
        $initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
        /* Open module and Create IV (Intialization Vector) */
        $openMode = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '','cbc', '');
        $blockSize = mcrypt_get_block_size(MCRYPT_RIJNDAEL_128, 'cbc');
        $plainPad = self::pkcs5_pad($osr, $blockSize);
        /* Initialize encryption handle */
        if (mcrypt_generic_init($openMode, $secretKey, $initVector) != -1)
        {
        }
        /* Encrypt data */
        $encryptedText = mcrypt_generic($openMode, $plainPad);
        // dd($encryptedText);
             mcrypt_generic_deinit($openMode);
        $osr =   bin2hex($encryptedText);


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

        //testName Encryption

        $secretKey = hex2bin(md5($key));
        $initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
        /* Open module and Create IV (Intialization Vector) */
        $openMode = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '','cbc', '');
        $blockSize = mcrypt_get_block_size(MCRYPT_RIJNDAEL_128, 'cbc');
        $plainPad = self::pkcs5_pad($testData, $blockSize);
        /* Initialize encryption handle */
        if (mcrypt_generic_init($openMode, $secretKey, $initVector) != -1)
        {
        }
        /* Encrypt data */
        $encryptedText = mcrypt_generic($openMode, $plainPad);
        // dd($encryptedText);
             mcrypt_generic_deinit($openMode);
        $testData =   bin2hex($encryptedText);

        //domainName Encryption

        $secretKey = hex2bin(md5($key));
        $initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
        /* Open module and Create IV (Intialization Vector) */
        $openMode = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '','cbc', '');
        $blockSize = mcrypt_get_block_size(MCRYPT_RIJNDAEL_128, 'cbc');
        $plainPad = self::pkcs5_pad($domainData, $blockSize);
        /* Initialize encryption handle */
        if (mcrypt_generic_init($openMode, $secretKey, $initVector) != -1)
        {
        }
        /* Encrypt data */
        $encryptedText = mcrypt_generic($openMode, $plainPad);
        // dd($encryptedText);
             mcrypt_generic_deinit($openMode);
        $domainData =   bin2hex($encryptedText);
        // $ch = curl_init();
        $headers= array('Content-Type: application/json','Accept:
        application/json;charset=utf-8','accessToken: '.$token);

        $url ='https://wheebox.com/wheeboxApi/testlink/'.$compCode.'/'.$domainData.'/'.$testData.'/'.$filterData.'/'.$osr.''; 
        // dd($url);
        // $url ="https://wheeboxuat.com/wheeboxAPI_v2/registration/0422000?val=".$filterData;
        // dd($url);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $filterData);
        $server_output = curl_exec($ch);
       
        
        // dd($server_output);
        $secretKey = hex2bin(md5($key));
        $initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
        $encryptedText=hex2bin($server_output);
        /* Open module, and create IV */
        $openMode = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '','cbc', '');
        // dd($server_output);
        mcrypt_generic_init($openMode, $secretKey, $initVector); 
        $decryptedText = mdecrypt_generic($openMode, $encryptedText);
        // Drop nulls from end of string $decryptedText = rtrim($decryptedText, "\0");
          // Returns "Decrypted string: some text here"
        mcrypt_generic_deinit($openMode);
        // print_r ($decryptedText);
        // $output =json_decode($decryptedText);
        $fdata=json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $decryptedText), true );
        if(isset($fdata['url'])){
            $add =\App\Candidate::where('email','=',$loginId)->first();
            if($data == "BARO VI"){
                $add->testUrl2 = $fdata['url'];
                $add->isTestTaken = 'Yes';
                $add->update();
            }else if($data == "Aspiration Test"){
                $add->testUrl = $fdata['url'];
                $add->isTestTaken = 'Yes';
                $add->update();
            }
        }
        if (curl_errno($ch))
            return curl_error($ch);
        curl_close($ch);
        return $decryptedText;
    }

        //pkc5 function
    static function pkcs5_pad ($text, $blocksize)
    {
        $pad = $blocksize - (strlen($text) % $blocksize);
        return $text . str_repeat(chr($pad), $pad);
    }
        //pkc5 function ends here

}