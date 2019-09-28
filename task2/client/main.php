<?php

//session_start();
require_once 'config.php';
require_once 'Helper.php';
require_once 'Models/CarModel.php';
ini_set("soap.wsdl_cache_enabled", 0);

function vd($v){
    var_dump($v);
    die;
}