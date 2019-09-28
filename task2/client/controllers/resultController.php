<?php

class resultController
{
    public function action($params){
        $year = $_POST['year'];
        $color = $_POST['color'];
        $price = $_POST['price'];
        $speed = $_POST['speed'];
        $capacity = $_POST['capacity'];
        $model = new CarModel();
        $result = $model -> search($year, $color, $price, $speed, $capacity);
        // var_dump($_POST);
        $result = Helper::createTable($result);

        include 'templates/searchResult.php';
    }
}