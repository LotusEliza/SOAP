<?php
// error_reporting(E_ALL);
require_once 'main.php';

$params = [];
if(isset($_GET['page'])){
    $params = explode('/', $_GET['page']);
    if(count($params) == 0){
        $params[] = 'index';
    }
}
else{
    $params[] = 'index';
}

$controller_name = array_shift($params);
$class = $controller_name.'Controller'; //addController
$controller_path = './controllers/'.$class.'.php';

//***********do action(routing)
if(file_exists($controller_path)) {
    include $controller_path;
    $worker = new $class;
    $worker->action($params);
} else {
    echo 'not found';
}