<?php
	  
	if (isset($_POST['eliminar']))
	{
		$resulta=eliminar();
		require_once("../Vista/Vista_Usuario.php");
	}

function eliminar(){
		$cod=$_POST["cdusu"];
	require_once("../Modelo/Modelo_Usuario.php");
	$mostrar= new MetodoUsuario();
	$resultado=$mostrar->EliminarUsuario($cod);

	return $resultado;
}
?>
