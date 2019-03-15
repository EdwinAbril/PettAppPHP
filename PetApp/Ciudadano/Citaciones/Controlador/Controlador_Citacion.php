<?php
require_once("../Modelo/Modelo_Citacion.php");
$mostrar= new MetodoCitacion();
$resultado=$mostrar->MostrarCitacion($Ced[0]);
require_once("../Vista/Citaciones.php");
?>