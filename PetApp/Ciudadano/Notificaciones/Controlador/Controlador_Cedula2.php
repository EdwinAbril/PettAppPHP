<?php
require_once("../Modelo/Modelo_Mascotas.php");
$mostrar= new MetodoNotificaciones();
$resultadod=$mostrar->MostrarCedula($usuar);
require_once("../Vista/Vista_Notificaciones.php");
?>
