<?php
require_once("../Modelo/Modelo_Usuario.php");
$mostrar= new MetodoUsuario();
$resultado=$mostrar->Mostrar_1_Usuario($cod);
require_once("../Vista/Modificar_Usuario.php");


?>