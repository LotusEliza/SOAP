<?php

include 'config.php';
include 'autoload.php';

// error_reporting(E_ALL);
// ini_set('display_errors', '1');

$cars = new Cars();
$cars->cars_list();

// $server = new SoapServer("http://tc.geeksforless.net/~user3/soap/task2/users.wsdl");
// // $server->setClass("registerUsers");
// $server->setClass("Cars");
// $server->handle();

include 'templates/index.php';