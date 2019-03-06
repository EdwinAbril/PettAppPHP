<?php
require_once("../../Eventos/Modelo/Modelo_Eventos.php");
$mostrar= new MetodoEventos();
$resultado=$mostrar->MostrarEventosL();
require_once("../../Login/Vista/login.php");
?>