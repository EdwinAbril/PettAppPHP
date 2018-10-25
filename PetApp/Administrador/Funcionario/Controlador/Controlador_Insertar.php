<?php
if (isset($_POST['consulta'])){
	$result=insertar();
	require_once("../Vista/Vista_Insertar.php");	
}

function insertar(){
	$ced=$_POST['cedula'];
	$tel=$_POST['telefono'];
	$nom=$_POST['nombre'];
	$cor=$_POST['correo'];
	$cla=$_POST['clave'];
	require_once("../Modelo/Modelo_Funcionario.php");
	$mostrar=new MetodoFuncionario();
	$result=$mostrar->InsertarFuncionario($ced,$tel,$nom,$cor,$cla);

	return $result;
}
?>