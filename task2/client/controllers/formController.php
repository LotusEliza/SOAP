<?php

class formController
{
    public function action($params){
        $id = $_POST['id'];

        include 'templates/orderCar.php';
    }
}