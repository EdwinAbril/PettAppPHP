<?php
require_once("../Modelo/Modelo_Veterinaria.php");
$mostrar= new MetodoVeterinaria();
$resultado=$mostrar->MostrarVeterinaria();
require_once("../Vista/Vista_Veterinaria.php");
?>