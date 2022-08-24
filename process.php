<?php


include_once("db.php");
include_once("dao/CarDAO.php");


$carDao = new CarDao($conn);

$brand = $_POST["brand"];
$km = $_POST["km"];
$color = $_POST['color'];



$newCar = new Car();

$newCar->setBrand($brand);
$newCar->setKm($km);
$newCar->setColor($color);


// Criando um novo carro;
$carDao->create($newCar);

//Quando o carro já estiver criado e deu tudo certo a gente manda ele pra home de novo
header("Location: index.php");



