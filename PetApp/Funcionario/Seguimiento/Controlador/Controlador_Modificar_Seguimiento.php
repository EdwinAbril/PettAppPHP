<?php
require_once("../Modelo/Modelo_Seguimiento.php");
$mostrar= new MetodoSeguimiento();
$resultado=$mostrar->Mostrar_1_Seguimiento($cod);
require_once("../Vista/Modificar_Seguimiento.php");


?>