<?php
require_once("../Modelo/Modelo_Animal.php");
$mostrar= new MetodoAnimal();
$resultado=$mostrar->MostrarAnimal();
require_once("../Vista/Vista_Animal.php");
?>