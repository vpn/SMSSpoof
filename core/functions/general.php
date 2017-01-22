<?php
/**
 * general.php
 *
 * Author: Patrick McGranaghan
 *
 * A collection of General and miscellaneous
 * functions that are used throughout.
 *
 */

    function getCountryListJson(){
        $url = "https://api.stuf.io/index.php?query=sms&function=countryList";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        if (curl_error($ch)) {
            return 'Unable to connect: ' . curl_errno($ch) . ' - ' . curl_error($ch);
            die();
        }
        curl_close($ch);

        // Attempt to decode response as json
        return json_decode($response, true);
    }

    function checkSetup(){
        global $config;
        if(!isset($config['AccountSid']) || !isset($config['AuthToken'])){
            return false;
        }else{
            return true;
        }
    }


?>
