<?php
	    $cod=$_GET["envidat"];
		$tel=$_POST['telefono'];
		$nom=$_POST['nombre'];
		$cor=$_POST['correo'];
		$cla=$_POST['clave'];
	require_once("../Modelo/Modelo_Animal.php");
	$mostrar= new MetodoAnimal();
	$resultado=$mostrar->ModificarAnimal($cod,$tel,$nom,$cor,$cla);
	require_once("../Vista/Modificar_Animal.php");


?>