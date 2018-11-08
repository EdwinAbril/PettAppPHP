<?php
require_once("../Modelo/Modelo_Administrador.php");
$mostrar= new MetodoAdministrador();
$resultado=$mostrar->MostrarAdministrador();
require_once("../Vista/Vista_Administrador.php");
?>