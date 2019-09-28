<?php

class Cars extends DB
{
    protected $con;

    public function __construct()
    {
        $this->con = Connection::getInstance();
    }

    public function carsList(){
        parent::carsList();
        return $this->result;
    }

    public function carInfo($id){
        $this->testInput($id);
        if (is_numeric($id)) { 
            parent::carInfo($id);
            return $this->result; 
        }else { 
            return ERROR;
        } 
    }

    public function searchByParams($year, $color, $price, $speed, $capacity){
        if($year){
                $this->testInput($year);
                $this->testInput($color);
                $this->testInput($price);
                $this->testInput($speed);
                $this->testInput($capacity);
   
                parent::searchByParams($year, $color, $price, $speed, $capacity);
                if($this->result){
                    return $this->result;
                }else{
                    return DB_ERROR;
                }
        }else{
            return ERROR_SEARCH;
        }
    }

    public function order($car_id, $name, $surname, $payment){
        if($name && $car_id){
            $this->testInput($car_id);
            $this->testInput($name);
            $this->testInput($surname);
            $this->testInput($payment);
            parent::order($car_id, $name, $surname, $payment);
            return $this->result; 
        }else{
            return ERROR_ORDER;
        }
    }

    public  function testInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}