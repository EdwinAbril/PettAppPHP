<?php
require_once("../Modelo/Modelo_Denuncias.php");
$mostrar= new MetodoDenuncias();
$resultado=$mostrar->MostrarDenuncias();
require_once("../Vista/Vista_Denuncias.php");
?>