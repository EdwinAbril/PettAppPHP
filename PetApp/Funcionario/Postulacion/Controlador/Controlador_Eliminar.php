<?php
	  
	if (isset($_POST['eliminar']))
	{
		$resulta=eliminar();
		require_once("../Vista/Vista_Postulacion.php");
	}

function eliminar(){
		$cod=$_POST["codp"];
	require_once("../Modelo/Modelo_Postulacion.php");
	$mostrar= new MetodoPostulacion();
	$resultado=$mostrar->EliminarPostulacion($cod);

	return $resultado;
}
?>
