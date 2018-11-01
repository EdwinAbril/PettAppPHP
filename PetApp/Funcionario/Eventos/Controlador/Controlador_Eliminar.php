<?php
	  
	if (isset($_POST['eliminar']))
	{
		$resulta=eliminar();
		require_once("../Vista/Vista_Eventos.php");
	}

function eliminar(){
		$cod=$_POST["codev"];
	require_once("../Modelo/Modelo_Eventos.php");
	$mostrar= new MetodoEventos();
	$resultado=$mostrar->EliminarEventos($cod);

	return $resultado;
}
?>
