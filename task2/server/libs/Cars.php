<?php

class Cars
{
    public $con;

    public function __construct()
    {
        $this->con = Connection::getInstance();
    }

    public function cars_list(){
        $query = "SELECT cars.id, brands.brand, models.model FROM cars 
        INNER JOIN brands ON cars.brand_id = brands.id 
        INNER JOIN models ON cars.model_id = models.id;";
        $stm = $this->con->prepare($query);
        $stm->execute();
        $resultArray = $stm->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($resultArray);
        return $resultArray;
    }

    public function car_info($id){
        $query = "SELECT c.year, c.capacity, c.speed, c.price, col.color 
                     FROM cars c INNER JOIN cars_colors cc ON c.id=cc.car_id
                     INNER JOIN colors col ON cc.color_id=col.id WHERE c.id=$id";
        $stm = $this->con->prepare($query);
        $stm->execute();
        $resultArray = $stm->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($resultArray);
        //return id, brand model
        //return <complex type>: year, capacity, color, speed, price
        return $resultArray;
    }

    public function search_by_params($year, $color, $price, $speed, $capacity){
        $query = "SELECT c.year, c.capacity, c.speed, c.price, col.color 
                     FROM cars c INNER JOIN cars_colors cc ON c.id=cc.car_id
                     INNER JOIN colors col ON cc.color_id=col.id WHERE c.year=$year AND col.color 
                     LIKE '%$color%' AND c.price LIKE '$price' AND c.speed LIKE '%$speed%' AND c.capacity LIKE '%$capacity%'";
        $stm = $this->con->prepare($query);
        $stm->execute();
        $resultArray = $stm->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($resultArray);
        return $resultArray;
    }

    public function order($car_id, $name, $surname, $payment){
        $query = "INSERT INTO orders_soap (name, surname, car_id, payment) VALUES ('$name', '$surname', $car_id, $payment)";
        var_dump($query);
        $stm = $this->con->prepare($query);
        $stm->execute();
        $this->query = NULL;
        $count = $stm->rowCount();
        if($count){
            return ITEM_INS;
        }else{
            return ERROR_INS;
        }
    }



// SELECT cars.id, brands.brand FROM cars INNER JOIN brands ON cars.brand_id = brands.id;
// SELECT cars.id, brands.brand, models.model FROM cars INNER JOIN brands ON cars.brand_id = brands.id INNER JOIN models ON cars.model_id = models.id;
// SELECT cars.year, cars.capacity, cars.speed, cars.price, colors.color FROM cars INNER JOIN cars_colors ON cars.id = cars_colors.car_id;
// SELECT c.year, c.capacity, c.speed, c.price, cc.color FROM cars INNER JOIN cars_colors ON cars.id = cars_colors.car_id;
// SELECT c.year, c.capacity, c.speed, c.price, cc.color FROM cars c INNER JOIN cars_colors cc ON c.id=cc.car_id;
//SELECT c.year, c.capacity, c.speed, c.price, col.color FROM cars c INNER JOIN cars_colors cc ON c.id=cc.car_id Inner Join colors col On cc.color_id=col.id;

//        SELECT c.year, c.capacity, c.speed, c.price, col.color
//                     FROM cars c INNER JOIN cars_colors cc ON c.id=cc.car_id
//                     INNER JOIN colors col ON cc.color_id=col.id WHERE col.color
//                     LIKE '%red%' OR c.price LIKE '1000'
}