<?php


require_once("../Modelo/Modelo_Funcionario.php");
$mostrar= new MetodoFuncionario();
$resultado=$mostrar->MostrarFuncionario($usuar);
require_once("../Vista/Vista_Funcionario.php");




?>