<?php
if (isset($_POST['consulta'])){
	$result=insertar();
	require_once("../Vista/Vista_Insertar.php");	
}

function insertar(){
	$cod=$_POST['codigo'];

	require_once("../Modelo/Modelo_Seguimiento.php");
	$mostrar=new MetodoSeguimiento();
	$result=$mostrar->InsertarUsuario($cod);

	return $result;
}
?>