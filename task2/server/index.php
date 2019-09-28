<?php

include 'config.php';
include 'autoload.php';

// error_reporting(E_ALL);
// ini_set('display_errors', '1');
// $result = new Cars();
// $var = $result->searchByParams(2019, '', '', '', '');
// var_dump($var);

$server = new SoapServer(WSDL, array('cache_wsdl' => WSDL_CACHE_NONE));
$server->setClass("Cars");
$server->handle();