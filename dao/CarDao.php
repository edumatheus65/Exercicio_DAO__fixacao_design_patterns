<?php

include_once("models/Car.php");

class CarDAO implements CarDAO {

    private $conn;

    public function_construct(PDO $conn) {
        $this->conn = $conn;
    }

    public function findAll() {

    }

    public function create(car $car) {

        $stmt = $this->conn->prepare("INSERT INTO cars")

    }

}