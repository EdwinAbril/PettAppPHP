<?php
require_once("../Modelo/Modelo_Ciudadano.php");
$mostrar= new MetodoCiudadano();
$resultado2=$mostrar->MostrarCiudadano($usuar);
require_once("../Vista/Pagina1.php");
?>