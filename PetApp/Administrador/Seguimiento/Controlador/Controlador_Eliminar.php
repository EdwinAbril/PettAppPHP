<?php
	  
	if (isset($_POST['eliminar']))
	{
		$resulta=eliminar();
		require_once("../Vista/Vista_Seguimiento.php");
	}

function eliminar(){
		$cod=$_POST["cdseg"];
	require_once("../Modelo/Modelo_Seguimiento.php");
	$mostrar= new MetodoSeguimiento();
	$resultado=$mostrar->EliminarSeguimiento($cod);

	return $resultado;
}
?>
