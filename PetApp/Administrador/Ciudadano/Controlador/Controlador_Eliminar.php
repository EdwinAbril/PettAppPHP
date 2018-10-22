<?php
	  
	if (isset($_POST['eliminar']))
	{
		$resulta=eliminar();
		require_once("../Vista/Vista_Ciudadano.php");
	}

function eliminar(){
		$cod=$_POST["ced"];
	require_once("../Modelo/Modelo_Ciudadano.php");
	$mostrar= new MetodoCiudadano();
	$resultado=$mostrar->EliminarCiudadano($cod);

	return $resultado;
}
?>
