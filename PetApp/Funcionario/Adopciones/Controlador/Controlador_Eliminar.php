<?php
	  
	if (isset($_POST['eliminar']))
	{
		$resulta=eliminar();
		require_once("../Vista/Vista_Adopciones.php");
	}

function eliminar(){
		$cod=$_POST["coda"];
	require_once("../Modelo/Modelo_Adopciones.php");
	$mostrar= new MetodoAdopciones();
	$resultado=$mostrar->EliminarAdopciones($cod);

	return $resultado;
}
?>
