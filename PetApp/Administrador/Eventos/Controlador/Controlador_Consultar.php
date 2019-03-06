<?php
require_once("../Modelo/Modelo_Eventos.php");
$mostrar= new MetodoEventos();
$resultado=$mostrar->MostrarEventosL();
require_once("../../../Ciudadano/Login/Vista/login.php");
?>