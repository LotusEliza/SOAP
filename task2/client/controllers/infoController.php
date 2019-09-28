<?php

class infoController
{
    public function action($params){
        $id = $_POST['id'];
        $model = new CarModel();
        $car = $model -> oneCar($id);
        $car = Helper::createTable($car['car']);

        include "templates/carInfo.php";
    }
}