<?php

include_once("db.php");

?>

<h1>Insira um carro</h1>
<form action="process.php" method="POST">

    <label for="brand">Marca do carro:</label>
    <input type="text" name="brand" placeholder="Insira a marca do carro">

    <label for="km">Insira a kilometragem:</label>
    <input type="text" name="km" placeholder="Insira a kilometragem">

    <label for="color">Cor do carro:</label>
    <input type="text" name="color" placeholder="Insira a cor do carro">


</form>