<?php

include 'config.php';
include 'autoload.php';

 error_reporting(E_ALL);
 ini_set('display_errors', '1');

$cars = new Cars();
//$cars->cars_list();
//$cars->car_info(1);
echo $cars->order(1, 'Liza', 'Lotus', 1);
//$cars->search_by_params('2005','red', 2000, '', '2');


// $server = new SoapServer("http://tc.geeksforless.net/~user3/soap/task2/users.wsdl");
// // $server->setClass("registerUsers");
// $server->setClass("Cars");
// $server->handle();

include 'templates/index.php';