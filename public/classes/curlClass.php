<?php

/**
 * Class for curl connection
 *
 * @author fscamilo@gmail.com
 */

class curlClass {
    
    private $result;
    
    function exec($url) {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_URL,$url);
        $curlResult = curl_exec($curl);
        if(!$curlResult){
            die(curl_error($curl));
        }
        $this->result = json_decode($curlResult, TRUE);
        curl_close($curl);
    }
    
    function getResult(){
        return $this->result;
    }
}
