<?php
require_once("../Modelo/Modelo_Denuncias.php");
$mostrar= new MetodoDenuncias();
$resultado=$mostrar->MostrarDenuncias($nit[0]);
require_once("../Vista/Vista_Denuncias.php");
?>