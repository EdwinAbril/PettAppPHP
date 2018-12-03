<?php
require_once("../Modelo/Modelo_Ciudadano.php");
$mostrar= new MetodoCiudadano();
$resultado=$mostrar->Mostrar_1_Usuario($usu);

$mostrar= new MetodoCiudadano();
$resultado2=$mostrar->Mostrar_1_Ciudadano($nom);
require_once("../Vista/Modificar_Ciudadano.php");
?>