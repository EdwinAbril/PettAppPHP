<?php
require_once("../Modelo/Modelo_Mascotas.php");
$mostrar= new MetodoMascotas();
$resultado=$mostrar->MostrarMascotas();
require_once("../Vista/Vista_Mascotas.php");
?>