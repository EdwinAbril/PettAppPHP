<?php
require_once("../Modelo/Modelo_Usuario.php");
$mostrar= new MetodoUsuario();
$resultado=$mostrar->Mostrarusuario($usuar);
require_once("../Vista/Ciudadano.php");
?>