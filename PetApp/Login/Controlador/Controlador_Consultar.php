<?php
require_once("../../Modelo/Modelo_Veterinarias.php");
$mostrar= new MetodoVeterinaria();
$resultado=$mostrar->MostrarVeterinaria();
require_once("../../Vista/Informacion/Veterinaria.php");
?>