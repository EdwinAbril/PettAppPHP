<?php
require_once("../Modelo/Modelo_Ciudadano.php");
$mostrar= new MetodoCiudadano();
$resultado=$mostrar->MostrarCiudadano($usuar);
require_once("../Vista/Vista_Ciudadano.php");
?>