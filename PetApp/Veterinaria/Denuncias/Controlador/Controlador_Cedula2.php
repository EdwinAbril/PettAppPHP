<?php
require_once("../Modelo/Modelo_Denuncias.php");
$mostrar= new MetodoDenuncias();
$resultadod=$mostrar->MostrarNit($usuar);
require_once("../Vista/Vista_Denuncias.php");
?>
