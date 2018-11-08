<link rel="stylesheet" href="../Vista/CSS/Estilos.css">
<link rel="stylesheet" href="../Vista/JS/jquery-3.3.1.min.js"">
<link rel="stylesheet" href="../Vista/JS/main.js">
<?php
	  
	if (isset($_POST['eliminar']))
	{
		$resulta=eliminar();
		require_once("../Vista/Vista_Seguimiento.php");
		header('Location:../Vista/Vista_Seguimiento.php');
	}

function eliminar(){
		$cod=$_POST["cdseg"];
	require_once("../Modelo/Modelo_Seguimiento.php");
	$mostrar= new MetodoSeguimiento();
	$resultado=$mostrar->EliminarSeguimiento($cod);

	return $resultado;
}
?>
