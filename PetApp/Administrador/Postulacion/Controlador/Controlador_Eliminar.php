<link rel="stylesheet" href="../Vista/CSS/Estilos.css">
<link rel="stylesheet" href="../Vista/JS/jquery-3.3.1.min.js"">
<link rel="stylesheet" href="../Vista/JS/main.js">
<?php
	  
	if (isset($_POST['eliminar']))
	{
		$resulta=eliminar();
		require_once("../Vista/Vista_Postulacion.php");
		header('Location:../Vista/Vista_Postulacion.php');
	}

function eliminar(){
		$cod=$_POST["codp"];
	require_once("../Modelo/Modelo_Postulacion.php");
	$mostrar= new MetodoPostulacion();
	$resultado=$mostrar->EliminarPostulacion($cod);

	return $resultado;
}
?>
