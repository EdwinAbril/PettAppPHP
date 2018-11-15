<?php
require_once("../Modelo/Modelo_Veterinaria.php");
$mostrar= new MetodoVeterinarias();
$resultado=$mostrar->Mostrar_1_Usuario($cod);
require_once("../Vista/Modificar_Usuario.php");


?>