<?php
require_once("../Modelo/Modelo_Denuncias.php");
$mostrar= new MetodoDenuncias();
$resultadof=$mostrar->MostrarFecha();
require_once("../Vista/Vista_Insertar.php");

require_once("../Modelo/Modelo_Denuncias.php");
$mostrar= new MetodoDenuncias();
$resultado=$mostrar->MostrarCedula($usuar);
require_once("../Vista/Vista_Insertar.php");



?>