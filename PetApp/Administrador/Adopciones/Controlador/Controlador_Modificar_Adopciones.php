<?php
require_once("../Modelo/Modelo_Adopciones.php");
$mostrar= new MetodoAdopciones();
$resultado=$mostrar->Mostrar_1_Adopcion($cod);
require_once("../Vista/Modificar_Adopciones.php");


?>