<?php
require_once("../Modelo/Modelo_Animal.php");
$mostrar= new MetodoAnimal();
$resultado=$mostrar->Mostrar_1_Animal($cod);
require_once("../Vista/Modificar_Animal.php");


?>