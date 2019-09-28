<?php

class searchController
{
    public function action($params){
        $cars = array
        (
            array('model' => 'DB5', 'brand' => 'Aston-Martin', "year" => 1965, 'color' => 'green', 'price' => '1000', 'speed' => 200, 'capacity' => 1),
            array('model' => 'V8 Vantage', 'brand' => 'Aston-Martin', "year" => 2005, 'color' => 'red', 'price' => '2000', 'speed' => 170, 'capacity' => 2),
            array('model' => 'S3', 'brand' => 'Audi', "year" => 2019, 'color' => 'green', 'price' => '20000', 'speed' => 270, 'capacity' => 2),
            array('model' => 'Type 2', 'brand' => 'Bugatti', "year" => 1900, 'color' => 'white', 'price' => '12000', 'speed' => 320, 'capacity' => 1),
            array('model' => 'Type 5', 'brand' => 'Bugatti', "year" => 1903, 'color' => 'red', 'price' => '25000', 'speed' => 90, 'capacity' => 1),
        );
        $cars = Helper::createTable($cars);

        include 'templates/searchCar.php';
    }
}