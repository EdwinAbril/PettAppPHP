<?php
require_once("../Modelo/Modelo_Postulacion.php");
$mostrar= new MetodoPostulacion();
$resultado=$mostrar->MostrarPostulacion();
require_once("../Vista/Vista_Postulacion.php");
?>