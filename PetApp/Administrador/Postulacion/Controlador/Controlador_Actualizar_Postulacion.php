<?php
	  
	if (isset($_POST['botonfunci']))
	{
		$result=modificar();
		require_once("../Vista/Modificar_Postulacion.php");
	}

function modificar(){
		$cod=$_POST["usu"];
		$tel=$_POST['tel'];
		$dir=$_POST['dir'];
		$fij=$_POST['fij'];
		$cer=$_POST['cer'];
		$ced=$_POST['ced'];
	require_once("../Modelo/Modelo_Postulacion.php");
	$mostrar= new MetodoPostulacion();
	$resultado=$mostrar->ModificarPostulacion($cod,$tel,$dir,$fij,$cer,$ced);

	return $resultado;
}
?>