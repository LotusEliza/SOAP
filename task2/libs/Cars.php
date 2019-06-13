<?php

class Cars
{
    public $con;

    public function __construct()
    {
        $this->con = Connection::getInstance();
    }

    public function cars_list(){
        $sqlQuery = "SELECT cars.id, brands.brand, models.model FROM cars 
        INNER JOIN brands ON cars.brand_id = brands.id 
        INNER JOIN models ON cars.model_id = models.id;";
        $stm = $this->con->prepare($sqlQuery);
        $stm->execute();
        $resultArray = $stm->fetchAll(PDO::FETCH_ASSOC);
        var_dump($resultArray);
        //return id, brand model
    }

    public function car_info($id){
        $sqlQuery = "SELECT cars.year, cars.capacity, cars.speed, cars.price, colors.color  FROM cars 
        INNER JOIN cars_colors ON cars.id = cars_colors.car_id";
        $stm = $this->con->prepare($sqlQuery);
        $stm->execute();
        $resultArray = $stm->fetchAll(PDO::FETCH_ASSOC);
        var_dump($resultArray);
        //return id, brand model
        //return <complex type>: year, capacity, color, speed, price
    }

    public function search_by_params($param){
        
    }

    public function order($id, $name, $surname, $payment){

        //return true false
    }

// SELECT cars.id, brands.brand FROM cars INNER JOIN brands ON cars.brand_id = brands.id;
// SELECT cars.id, brands.brand, models.model FROM cars INNER JOIN brands ON cars.brand_id = brands.id INNER JOIN models ON cars.model_id = models.id;
// SELECT cars.year, cars.capacity, cars.speed, cars.price, colors.color FROM cars INNER JOIN cars_colors ON cars.id = cars_colors.car_id;
// SELECT c.year, c.capacity, c.speed, c.price, cc.color FROM cars INNER JOIN cars_colors ON cars.id = cars_colors.car_id;
// SELECT c.year, c.capacity, c.speed, c.price, cc.color FROM cars c INNER JOIN cars_colors cc ON c.id=cc.car_id;
SELECT c.year, c.capacity, c.speed, c.price, col.color FROM cars c INNER JOIN cars_colors cc ON c.id=cc.car_id Inner Join colors col On cc.color_id=col.id;


}