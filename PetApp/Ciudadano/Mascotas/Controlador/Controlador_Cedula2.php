<?php
require_once("../Modelo/Modelo_Mascotas.php");
$mostrar= new MetodoMascotas();
$resultadod=$mostrar->MostrarCedula($usuar);
require_once("../Vista/Vista_Mascotas.php");
?>
