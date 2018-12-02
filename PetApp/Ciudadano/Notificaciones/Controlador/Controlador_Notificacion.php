<?php
require_once("../Modelo/Modelo_Mascotas.php");
$mostrar= new MetodoNotificaciones();
$resultado=$mostrar->MostrarRespuestas($Ced[0]);
require_once("../Vista/Vista_Notificaciones.php");
?>