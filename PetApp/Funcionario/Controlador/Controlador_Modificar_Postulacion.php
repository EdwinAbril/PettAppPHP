<?php
require_once("../Modelo/Modelo_Postulacion.php");
$mostrar= new MetodoPostulacion();
$resultado=$mostrar->Mostrar_1_Postulacion($cod);
require_once("../Vista/Modificar_Postulacion.php");


?>