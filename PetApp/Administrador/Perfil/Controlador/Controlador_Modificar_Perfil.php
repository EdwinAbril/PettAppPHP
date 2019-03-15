<?php
require_once("../Modelo/Modelo_Perfil.php");
$mostrar= new MetodoAdministrador();
$resultado=$mostrar->Mostrar_1_Administrador($cod);
require_once("../Vista/Modificar_Perfil.php");


?>