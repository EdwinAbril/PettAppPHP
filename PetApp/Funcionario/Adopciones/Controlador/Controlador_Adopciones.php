<?php
require_once("../Modelo/Modelo_Adopciones.php");
$mostrar= new MetodoAdopciones();
$resultado=$mostrar->MostrarAdopciones();
require_once("../Vista/Vista_Adopciones.php");
?>