<?php
if (isset($_POST['consulta'])){
	$result=insertar();
	require_once("../Vista/Vista_Insertar_Funcionario.php");	
}
function insertar(){
	$us=$_POST['cedula'];
	$cla=$_POST['clave'];
	require_once("../Modelo/Modelo_Insertar.php");
	$mostrar=new MetodoFuncionarios();
	$result=$mostrar->InsertarUsuarioFuncionario($us,$cla);
	return $result;
}
?>