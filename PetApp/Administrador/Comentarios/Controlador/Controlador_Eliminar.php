<?php
	  
	if (isset($_POST['eliminar']))
	{
		$resulta=eliminar();
		require_once("../Vista/Vista_Comentarios.php");
	}

function eliminar(){
		$cod=$_POST["codc"];
	require_once("../Modelo/Modelo_Comentarios.php");
	$mostrar= new MetodoComentarios();
	$resultado=$mostrar->EliminarComentarios($cod);

	return $resultado;
}
?>
