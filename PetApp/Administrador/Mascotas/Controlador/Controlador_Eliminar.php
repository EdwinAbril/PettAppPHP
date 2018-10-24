<?php
	  
	if (isset($_POST['eliminar']))
	{
		$resulta=eliminar();
		require_once("../Vista/Vista_Mascotas.php");
	}

function eliminar(){
		$cod=$_POST["codma"];
	require_once("../Modelo/Modelo_Mascotas.php");
	$mostrar= new MetodoMascotas();
	$resultado=$mostrar->EliminarMascotas($cod);

	return $resultado;
}
?>
