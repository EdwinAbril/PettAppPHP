<?php
if (isset($_POST['botonfunci']))
	{
		$result=modificar();
		require_once("../Vista/Modificar_Animal.php");
	}

function modificar(){
	    $cod=$_POST["usu"];
		$tel=$_POST['nombre'];
		$nom=$_POST['tipo'];
		$cor=$_POST['edad'];
		$cla=$_POST['raza'];
		
	require_once("../Modelo/Modelo_Animal.php");
	$mostrar= new MetodoAnimal();
	$resultado=$mostrar->ModificarAnimal($cod,$tel,$nom,$cor,$cla);

	return $resultado;
}


?>