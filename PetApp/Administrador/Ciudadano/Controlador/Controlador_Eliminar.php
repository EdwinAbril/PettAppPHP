<link rel="stylesheet" href="../Vista/CSS/Estilos.css">
<link rel="stylesheet" href="../Vista/JS/jquery-3.3.1.min.js"">
<link rel="stylesheet" href="../Vista/JS/main.js">
<?php
	  
	if (isset($_POST['eliminar']))
	{
		$resulta=eliminar();
		header('Location: ../Vista/Vista_Ciudadano.php');
	}

function eliminar(){
		$cod=$_POST["ced"];
		$nom=$_POST["nom"];
	require_once("../Modelo/Modelo_Ciudadano.php");
	$mostrar= new MetodoCiudadano();
	$resulta=$mostrar->EliminarCiudadano($cod);
	$resulta=$mostrar->EliminarDatos($nom);

	return $resulta;
}
?>
