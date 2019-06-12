<?php

include 'config.php';
include 'autoload.php';

error_reporting(E_ALL);
ini_set('display_errors', '1');

//************************* SOAP *************************************
 $soap_test = new Soap();
 $continents1 = $soap_test->list_continents();
 $capital1 = $soap_test->capital_city('CA');

//************************* cURL *************************************
$curl_test = new Curl();
$capital2 = $curl_test->capital_city('CA');
$continents2 = $curl_test->list_continents();

include 'templates/index.php';