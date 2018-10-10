<?php
	    $cod=$_GET["envidat"];
		$tel=$_POST['telefono'];
		$nom=$_POST['nombre'];
		$cor=$_POST['correo'];
		$cla=$_POST['clave'];
	require_once("../Modelo/Modelo_Funcionario.php");
	$mostrar= new MetodoFuncionario();
	$resultado=$mostrar->ModificarFuncionario($cod,$tel,$nom,$cor,$cla);
	require_once("../Vista/Modificar_Funcionario.php");


?>