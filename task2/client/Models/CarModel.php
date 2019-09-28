<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 7/2/17
 * Time: 3:18 PM
 */

class CarModel
{
        public $soap;

        public function __construct(){

            $this->soap = new SoapClient(WSDL);
        }

        public function getCars()
        {
            try {
                $result = $this->soap->carsList();
                return $result;
            } catch ( SoapFault $sf ) {
                return $sf->getMessage();
            }
        }

        public function oneCar($id){
            try {
                $result = $this->soap->carInfo($id);
                $result=['car'=>$result, 'id'=>$id];
                return $result;
            } catch ( SoapFault $sf ) {
                return $sf->getMessage();
            }
        }

        public function order($name, $surname, $id, $payment){
            try {
                $result = $this->soap->order($id, $name, $surname, $payment);
                return $result;
            } catch ( SoapFault $sf ) {
                return $sf->getMessage();
            }
        }

        public function search($year, $color, $price, $speed, $capacity){
            try {
                $result = $this->soap->searchByParams($year, $color, $price, $speed, $capacity);
                // var_dump($result);
                return $result;
            } catch ( SoapFault $sf ) {
                return $sf->getMessage();
            }
        }
    }