<?php
	    $cod=$_GET["cod"];
		$tel=$_POST['nombre'];
		$nom=$_POST['tipo'];
		$cor=$_POST['edad'];
		$cla=$_POST['raza'];
		
	require_once("../Modelo/Modelo_Animal.php");
	$mostrar= new MetodoAnimal();
	$resultado=$mostrar->ModificarAnimal($cod,$tel,$nom,$cor,$cla);
	require_once("../Vista/Modificar_Animal.php");


?>