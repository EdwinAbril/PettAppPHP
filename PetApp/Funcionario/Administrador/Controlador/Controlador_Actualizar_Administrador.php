<?php
	  
	if (isset($_POST['botonfunci']))
	{
		$result=modificar();
		require_once("../Vista/Modificar_Administrador.php");
	}

function modificar(){
		$cod=$_POST["usu"];
		$tel=$_POST['clave'];
	require_once("../Modelo/Modelo_Administrador.php");
	$mostrar= new MetodoAdministrador();
	$resultado=$mostrar->ModificarAdministrador($cod,$tel);

	return $resultado;
}
?>