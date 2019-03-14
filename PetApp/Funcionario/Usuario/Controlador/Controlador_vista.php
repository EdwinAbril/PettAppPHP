<?php
require_once("../Modelo/Modelo_Usuario.php");
$mostrar= new MetodoUsuario();
$resultado=$mostrar->MostrarUsuario();
require_once("../Vista/Vista_Usuario.php");
?>