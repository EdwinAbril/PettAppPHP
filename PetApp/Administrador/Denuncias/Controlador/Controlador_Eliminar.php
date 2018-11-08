<link rel="stylesheet" href="../Vista/CSS/Estilos.css">
<link rel="stylesheet" href="../Vista/JS/jquery-3.3.1.min.js"">
<link rel="stylesheet" href="../Vista/JS/main.js">
<?php 
	  
	if (isset($_POST['eliminar']))
	{
		$resulta=eliminar();
		require_once("../Vista/Vista_Denuncias.php");
		header('Location:../Vista/Vista_Denuncias.php');
	}

function eliminar(){
		$cod=$_POST["codde"];
	require_once("../Modelo/Modelo_Denuncias.php");
	$mostrar= new MetodoDenuncias();
	$resultado=$mostrar->EliminarDenuncias($cod);

	return $resultado;
}
?>
