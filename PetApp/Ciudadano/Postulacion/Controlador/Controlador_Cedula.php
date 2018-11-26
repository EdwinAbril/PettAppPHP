<?php
require_once("../Modelo/Modelo_Postulacion.php");
$mostrar= new MetodoPostulacion();
$resultado=$mostrar->MostrarCedula($usuar);
require_once("../Vista/Vista_Insertar.php");
?>