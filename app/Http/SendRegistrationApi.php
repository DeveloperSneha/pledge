<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http;

class SendRegistrationApi {

    static function sendRegistrationNotification($message,$data) {
        return self::initiateRegistrationApi($message,$data);
    }

    static function initiateRegistrationApi($message,$data) {
        // $token = 'wsyiCTwvHvx1iOM';
        // $key = 'wsyiCTwvHvx1iOM';
        // $compCode = '0422000';
        // $st =\App\State::Where('idState','=',$data->state)->pluck('stateName');
        // $dist =\App\District::Where('idDistrict','=',$data->district)->pluck('districtName');
        
        // $requestJSON->loginId = $data->mobile;
        // $requestJSON->firstName = $data->name;
        // $requestJSON->lastName = '';
        // $requestJSON->dob = $data->dob;
        // $requestJSON->state = '';
        // $requestJSON->gender = $data->gender;
        // $requestJSON->country = $data->country;
        // $requestJSON->city = '';
        // $requestJSON->contactNo = $data->mobile;

        $filterData = array(
            'loginId' => $data->email,
            'firstName'=>$data->name,
            'lastName'=>'NULL',
            'dob'=>$data->dob,
            'state'=>'NULL',
            'gender'=>$data->gender,
            'country'=>$data->country, 
            'city'=>'NULL',
            'contactNo'=>$data->mobile
            // 'assignTests'=> ''
        ); 
        // // $fields = "{'loginID': ".$data->mobile.", 'firstName': ".$data->name."}";
        // $fields = json_encode($fields);
        // $encrypt =self::encrypt($fields,$key);
        // $json = $encrypt;


        // $filterData = new \App\Candidate();
        // $filterData->firstName=$data->name;
        // $filterData->lastName=$data->name;
        // $filterData->loginId=$data->mobile;
        // $filterData->dob=$data->dob;
        // $filterData->gender=$data->gender;
        // $filterData->city="Panchkula";
        // $filterData->state="Haryana";
        // $filterData->country=$data->country;


        $filterData = json_encode($filterData);
        // print_r($filterData);
        $key = 'wsyiCTwvHvx1iOM';        
        $token="B04C170CaC11a8751aC7";


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
        $url ="https://wheebox.com/wheeboxAPI_v2/registration/0422000?val=".$filterData;
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
        // curl_setopt($ch,
        // CURLOPT_URL,"https://wheeboxuat.com/wheeboxAPI_v2/registration/0422000?val=".$filterData)
        // ;
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        // curl_setopt($ch,CURLOPT_HTTPHEADER,array('accessToken: '.$token.''));
        // $server_output = curl_exec($ch);
        // dd($server_output);
        // curl_close ($ch);
        $output =json_decode($server_output);
        if($output->wheeboxid){
            $add =\App\Candidate::where('idCandidate','=',$data->idCandidate)->first();
            $add->idWheebox = $output->wheeboxid;
            $add->update();
        }
        // print_r($server_output);

        

        // $secretKey = hex2bin(md5($key));
        // $initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
        // $encryptedText=hex2bin($server_output);
        // /* Open module, and create IV */
        // $openMode = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '','cbc', '');
        // dd($server_output);
        // mcrypt_generic_init($openMode, $secretKey, $initVector); 
        // $decryptedText = mdecrypt_generic($openMode, $encryptedText);
        // // Drop nulls from end of string $decryptedText = rtrim($decryptedText, "\0");
        //   // Returns "Decrypted string: some text here"
        // mcrypt_generic_deinit($openMode);
        // print_r ($decryptedText);
        // dd($decryptedText);



        // $url = 'https://wheeboxuat.com/wheeboxApi_v2/registration/'.$compCode.'?val='.$json.'';
        // //Print the request json
        // // $decrypt =self::decrypt($json,$key);
        
        // // $dc = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $decrypt);
        // // $fdata=json_decode($dc);
        // // dd($fdata);
        // $headers= array('Content-Type: application/x-www-form-urlencoded','Accept: application/json;charset=utf-8','accessToken: '.$token);

        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_URL, $url);
        // curl_setopt($ch, CURLOPT_POST, true);
        // curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch, CURLOPT_POSTFIELDS, $json);

        // $result = curl_exec($ch);
        // dd($ch);
        // exit();
        // if (curl_errno($ch))
        //     return curl_error($ch);
        // curl_close($ch);

        return $server_output;
    }

    static function encrypt($plainText,$key) {
        $secretKey = hex2bin(md5($key));
        $initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
        /* Open module and Create IV (Intialization Vector) */
        $openMode = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '','cbc', ''); $blockSize = mcrypt_get_block_size(MCRYPT_RIJNDAEL_128, 'cbc');
        $plainPad = self::pkcs5_pad($plainText, $blockSize);
        /* Initialize encryption handle */
        if (mcrypt_generic_init($openMode, $secretKey, $initVector) != -1)
        {
        }
        /* Encrypt data */
        $encryptedText = mcrypt_generic($openMode, $plainPad);
        mcrypt_generic_deinit($openMode);
        return bin2hex($encryptedText);
    }
        //encrypt function ends here
        //decrypt function to decrypt data coming back from weebox api
    static function decrypt($encryptedText,$key) {
        $secretKey = hex2bin(md5($key));
        $initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
        $encryptedText=hex2bin($encryptedText);
        /* Open module, and create IV */
        $openMode = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '','cbc', '');
        mcrypt_generic_init($openMode, $secretKey, $initVector); $decryptedText = mdecrypt_generic($openMode, $encryptedText);
        // Drop nulls from end of string $decryptedText = rtrim($decryptedText, "\0");
        // Returns "Decrypted string: some text here"
        mcrypt_generic_deinit($openMode);
        return $decryptedText;
    }
        //decrypt function ends here
        //pkc5 function
    static function pkcs5_pad ($text, $blocksize)
    {
        $pad = $blocksize - (strlen($text) % $blocksize);
        return $text . str_repeat(chr($pad), $pad);
    }
        //pkc5 function ends here
         

    



}