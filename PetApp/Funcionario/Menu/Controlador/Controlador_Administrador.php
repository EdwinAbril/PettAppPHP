<?php
require_once("../Modelo/Modelo_Administrador.php");
$mostrar= new MetodoAdministrador();
$resultado=$mostrar->MostrarAdministrador($usuar);
require_once("../Vista/Funcionario.php");
?>