<?php
require_once("../Modelo/Modelo_Perfil.php");
$mostrar= new MetodoAdministrador();
$resultado=$mostrar->MostrarAdministrador($usuar);
require_once("../Vista/Vista_Perfil.php");
?>