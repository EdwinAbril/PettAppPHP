<?php
require_once("../Modelo/Modelo_Eventos.php");
$mostrar= new MetodoEventos();
$resultado=$mostrar->MostrarEventos();
require_once("../Vista/Vista_Eventos.php");
?>