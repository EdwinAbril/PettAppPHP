<?php
require_once("../Modelo/Modelo_Seguimiento.php");
$mostrar= new MetodoSeguimiento();
$resultado=$mostrar->MostrarSeguimiento();
require_once("../Vista/Vista_Seguimiento.php");
?>