<?php
require_once("../Modelo/Modelo_Administrador.php");
$mostrar= new MetodoAdministrador();
$resultado=$mostrar->Mostrar_1_Administrador($cod);
require_once("../Vista/Modificar_Administrador.php");


?>