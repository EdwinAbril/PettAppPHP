<?php
require_once("../Modelo/Modelo_Mascotas.php");
$mostrar= new MetodoMascotas();
$resultado=$mostrar->Mostrar_1_Mascota($cod);
require_once("../Vista/Modificar_Mascotas.php");


?>