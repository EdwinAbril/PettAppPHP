<?php
require_once("../Modelo/Modelo_Seguimiento.php");
$mostrar= new MetodoSeguimiento();
$resultado=$mostrar->Mostrar_1_animal($animal);
require_once("../Vista/Vista_RespuestaPositiva.php");
?>