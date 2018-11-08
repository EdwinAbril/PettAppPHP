<link rel="stylesheet" href="../Vista/CSS/Estilos.css">
<link rel="stylesheet" href="../Vista/JS/jquery-3.3.1.min.js"">
<link rel="stylesheet" href="../Vista/JS/main.js">
<?php
	  
	if (isset($_POST['eliminar']))
	{
		$resulta=eliminar();
		require_once("../Vista/Vista_Eventos.php");
		header('Location:../Vista/Vista_Eventos.php');
	}

function eliminar(){
		$cod=$_POST["codev"];
	require_once("../Modelo/Modelo_Eventos.php");
	$mostrar= new MetodoEventos();
	$resultado=$mostrar->EliminarEventos($cod);

	return $resultado;
}
?>
