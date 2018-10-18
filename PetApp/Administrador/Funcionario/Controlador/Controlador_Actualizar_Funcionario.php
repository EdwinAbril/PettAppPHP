<?php
	  
	if (isset($_POST['botonfunci']))
	{
		$result=modificar();
		require_once("../Vista/Modificar_Funcionario.php");
	}

function modificar(){
		$cod=$_POST["cod"];
		$tel=$_POST['telefono'];
		$nom=$_POST['nombre'];
		$cor=$_POST['correo'];
		$cla=$_POST['clave'];
	require_once("../Modelo/Modelo_Funcionario.php");
	$mostrar= new MetodoFuncionario();
	$resultado=$mostrar->ModificarFuncionario($cod,$tel,$nom,$cor,$cla);

	return $resultado;
}
?>