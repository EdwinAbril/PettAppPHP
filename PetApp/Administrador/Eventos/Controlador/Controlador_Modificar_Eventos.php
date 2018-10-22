<?php
require_once("../Modelo/Modelo_Eventos.php");
$mostrar= new MetodoEventos();
$resultado=$mostrar->Mostrar_1_Evento($cod);
require_once("../Vista/Modificar_Eventos.php");


?>