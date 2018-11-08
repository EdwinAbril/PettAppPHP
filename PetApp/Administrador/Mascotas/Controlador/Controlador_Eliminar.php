<link rel="stylesheet" href="../Vista/CSS/Estilos.css">
<link rel="stylesheet" href="../Vista/JS/jquery-3.3.1.min.js"">
<link rel="stylesheet" href="../Vista/JS/main.js">
<?php
	  
	if (isset($_POST['eliminar']))
	{
		$resulta=eliminar();
		require_once("../Vista/Vista_Mascotas.php");
		header('Location:../Vista/Vista_Mascotas.php');
	}

function eliminar(){
		$cod=$_POST["codma"];
	require_once("../Modelo/Modelo_Mascotas.php");
	$mostrar= new MetodoMascotas();
	$resultado=$mostrar->EliminarMascotas($cod);

	return $resultado;
}
?>
