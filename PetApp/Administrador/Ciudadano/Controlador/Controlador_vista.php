<?php
require_once("../Modelo/Modelo_Ciudadano.php");
$mostrar= new MetodoCiudadano();
$resultado=$mostrar->MostrarCiudadano();
require_once("../Vista/Vista_Ciudadano.php");
?>