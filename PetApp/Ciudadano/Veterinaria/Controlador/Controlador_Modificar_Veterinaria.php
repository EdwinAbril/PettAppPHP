<?php
require_once("../Modelo/Modelo_Veterinaria.php");
$mostrar= new MetodoVeterinaria();
$resultado=$mostrar->Mostrar_1_Veterinaria($cod);
require_once("../Vista/Modificar_Veterinaria.php");


?>