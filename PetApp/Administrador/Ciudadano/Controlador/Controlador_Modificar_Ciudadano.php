<?php
require_once("../Modelo/Modelo_Ciudadano.php");
$mostrar= new MetodoCiudadano();
$resultado=$mostrar->Mostrar_1_Ciudadano($cod);
require_once("../Vista/Modificar_Ciudadano.php");


?>