<?php
require_once("../Modelo/Modelo_Mascotas.php");
$mostrar= new MetodoMascotas();
$resultado=$mostrar->MostrarMascotas($Ced[0]);
require_once("../Vista/Vista_Mascotas.php");
?>