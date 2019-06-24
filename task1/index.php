<?php

include 'config.php';
include 'autoload.php';

error_reporting(E_ALL);
ini_set('display_errors', '1');


function continents(iGetData $obj){
    return $obj->listContinents();
}

function capital(iGetData $obj){
    $code = 'CA';
    return $obj->capitalCity($code);
}

//************************* SOAP *************************************
$soap_test = new Soap();
$continents1 = continents($soap_test);
$capital1 = capital($soap_test);

//************************* cURL *************************************
$curl_test = new Curl();
$continents2 = continents($curl_test);
$capital2 = capital($curl_test);

include 'templates/index.php';