<?php

class DB
{
    protected $result;

    public function __construct(){}

    public function carsList(){
        $query = "SELECT cars.id, brands.brand, models.model FROM cars 
        INNER JOIN brands ON cars.brand_id = brands.id 
        INNER JOIN models ON cars.model_id = models.id;";
        $stm = $this->con->prepare($query);
        $stm->execute();
        $this->result = $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    protected function carInfo($id){
        $query = "SELECT c.year, c.capacity, c.speed, c.price, col.color 
                     FROM cars c INNER JOIN cars_colors cc ON c.id=cc.car_id
                     INNER JOIN colors col ON cc.color_id=col.id WHERE c.id=$id";
        $stm = $this->con->prepare($query);
        $stm->execute();
        $this->result = $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    protected function searchByParams($year, $color, $price, $speed, $capacity){
        $query = "SELECT c.year, c.capacity, c.speed, c.price, col.color, b.brand, m.model 
                     FROM cars c INNER JOIN cars_colors cc ON c.id=cc.car_id
                     INNER JOIN brands b ON c.brand_id=b.id
                     INNER JOIN models m ON c.model_id=m.id
                     INNER JOIN colors col ON cc.color_id=col.id WHERE c.year=$year AND col.color 
                     LIKE '%$color%' AND c.price LIKE '%$price%' AND c.speed LIKE '%$speed%' AND c.capacity LIKE '%$capacity%'";
        $stm = $this->con->prepare($query);
        $stm->execute();
        $this->result = $stm->fetchAll(PDO::FETCH_ASSOC);
    }

        protected function order($car_id, $name, $surname, $payment){
        $query = "INSERT INTO orders_soap (name, surname, car_id, payment) VALUES (?,?,?,?)";
        var_dump($query);
        $stm = $this->con->prepare($query);
        $stm->bindParam(1, $name, PDO::PARAM_STR, 12);
        $stm->bindParam(2, $surname, PDO::PARAM_STR, 12);
        $stm->bindParam(3, $car_id, PDO::PARAM_INT);
        $stm->bindParam(4, $payment, PDO::PARAM_INT);
        $stm->execute();
        $count = $stm->rowCount();
        if($count){
            $this->result = ITEM_INS;
        }else{
            $this->result = ERROR_INS;
        }
    }

    public function __destruct()
    {
        try {
            $this->con = null;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
