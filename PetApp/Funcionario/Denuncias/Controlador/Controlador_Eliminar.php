<?php 
	  
	if (isset($_POST['eliminar']))
	{
		$resulta=eliminar();
		require_once("../Vista/Vista_Denuncias.php");
	}

function eliminar(){
		$cod=$_POST["codde"];
	require_once("../Modelo/Modelo_Denuncias.php");
	$mostrar= new MetodoDenuncias();
	$resultado=$mostrar->EliminarDenuncias($cod);

	return $resultado;
}
?>
