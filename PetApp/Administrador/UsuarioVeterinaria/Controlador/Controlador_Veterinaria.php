<?php
if (isset($_POST['consulta'])){
	$result=insertar();
	require_once("../Vista/Vista_Insertar_Veterinaria.php");	
}

function insertar(){
	$nom=$_POST['nombre'];
	$cla=$_POST['clave'];
	require_once("../Modelo/Modelo_Veterinaria.php");
	$mostrar=new MetodoVeterinaria();
	$result=$mostrar->InsertarUsuario($nom,$cla);

	return $result;
}
?>