<?php

class orderController
{
    public function action($params)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST['name'])) {
                $error=true;
            }else{
                $name = $this->testInput($_POST["name"]);
                $surname = $this->testInput($_POST["surname"]);
                $id = $this->testInput($_POST["id"]);
                $payment = $this->testInput($_POST["payment"]);
                $model = new CarModel();
                $result = $model->order($name, $surname, $id, $payment);
            }

            include 'templates/thankYou.php';
        }
    }

    public  function testInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
