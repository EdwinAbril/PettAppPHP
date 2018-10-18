<?php
if (isset($_POST['consulta'])){
	$result=insertar();
	require_once("../Vista/Vista_Insertar.php");	
}

function insertar(){
	$na=$_POST['nombre'];
	$ta=$_POST['tipo'];
	$ea=$_POST['edad'];
	$ra=$_POST['raza'];
	require_once("../Modelo/Modelo_Animal.php");
	$mostrar=new MetodoAnimal();
	$result=$mostrar->InsertarAnimal($na,$ta,$ea,$ra);

	return $result;
}

?>