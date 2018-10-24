<?php
	  
	if (isset($_POST['botonfunci']))
	{
		$result=modificar();
		require_once("../Vista/Modificar_Comentarios.php");
	}

function modificar(){
		$cod=$_POST["usu"];
		$fec=$_POST['fec'];
		$cue=$_POST['cue'];
		$ado=$_POST['ado'];
	require_once("../Modelo/Modelo_Comentarios.php");
	$mostrar= new MetodoComentarios();
	$resultado=$mostrar->ModificarComentarios($fec,$cue,$ado,$cod);

	return $resultado;
}
?>