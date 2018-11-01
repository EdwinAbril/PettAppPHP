<?php
if (isset($_POST['consulta'])){
	$result=insertar();
	require_once("../Vista/Vista_Insertar_Funcionario.php");	
}

function insertar(){
	$ced=$_POST['cedula'];
	$nom=$_POST['nombre'];
	$cla=$_POST['clave'];
	require_once("../Modelo/Modelo_Funcionario.php");
	$mostrar=new MetodoFuncionario();
	$result=$mostrar->InsertarUsuario($ced,$nom,$cla);

	return $result;
}
?>