<?php
defined('BASEPATH') or exit('No direct script access allowed');




if (!function_exists('logindata')) {

    function logindata($pdata)
    {









        $curl = curl_init();
        $data_array = array('postusername' => $pdata['postusername'], 'postpassword' => $pdata['postpassword'], 'try' => $pdata['try']);
        $chkdata = http_build_query($data_array);
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://ptsabongapi.estreamsports.com:19043/api/user',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            // CURLOPT_POSTFIELDS => array('postusername' => 'wines1011d', 'postpassword' => 'zaq12345'),
            CURLOPT_POSTFIELDS => $chkdata,
            CURLOPT_HTTPHEADER => array(
                'X-API-KEY: 5rqcx2m8gl2f9w9bq4efwzmuy',
                'X-API-PASSWORD: wyBRAiE97rLCUYnyV',
                'X-API-USERNAME: appAccess',
                'Authorization: Basic YWRtaW46MTIzNA=='
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }
}
