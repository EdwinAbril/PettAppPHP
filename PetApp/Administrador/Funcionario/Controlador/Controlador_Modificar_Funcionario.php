<?php
require_once("../Modelo/Modelo_Funcionario.php");
$mostrar= new MetodoFuncionario();
$resultado=$mostrar->Mostrar_1_Funcionario($cod);
require_once("../Vista/Modificar_Funcionario.php");


?>