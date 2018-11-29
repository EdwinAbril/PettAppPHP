<?php
require_once("../Modelo/Modelo_Mascotas.php");
$mostrar= new MetodoMascotas();
$resultado=$mostrar->MostrarCedula($usuar);
require_once("../Vista/Vista_Insertar.php");
?>