<?php

include_once("db.php");
include_once("dao/CarDao.php");

$carDao = new CarDao($conn);

$cars = $carDao->findAll();

?>

<h1>Insira as Informações do seu Veículo</h1>
<form action="process.php" method="POST">

    <label for="brand">Marca do carro:</label>
    <input type="text" name="brand" placeholder="Insira a marca do carro">
    <br>

    <label for="km">Insira a kilometragem:</label>
    <input type="text" name="km" placeholder="Insira a kilometragem">
    <br>

    <label for="color">Cor do carro:</label>
    <input type="text" name="color" placeholder="Insira a cor do carro">
    <br>

    <input type="submit" value="Salvar">

</form>

<item>
    <?php foreach ($cars as $car): ?>
        <li><?= $car->getBrand() ?> - <?= $car->getKm() ?> - <?= $car->getColor() ?></li>
    <?php endforeach; ?>
</item