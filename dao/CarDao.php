<?php

include_once("models/Car.php");

class CarDAO implements CarDAOInterface {

    private $conn;

    public function __construct(PDO $conn) {
        $this->conn = $conn;
    }

    public function findAll() {

    }

    public function create(car $car) {

        $stmt = $this->conn->prepare("INSERT INTO cars (brand, km, color) VALUES (:brand, :km, :color)");

        $stmt->bindParam(":brand", $car->getBrand());
        $stmt->bindParam(":km", $car->getkm());
        $stmt->bindParam(":color", $car->getcolor());

        $stmt->execute();

    }

}