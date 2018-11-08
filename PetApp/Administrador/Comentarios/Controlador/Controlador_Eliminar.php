<link rel="stylesheet" href="../Vista/CSS/Estilos.css">
<link rel="stylesheet" href="../Vista/JS/jquery-3.3.1.min.js"">
<link rel="stylesheet" href="../Vista/JS/main.js">
<?php
	  
	if (isset($_POST['eliminar']))
	{
		$resulta=eliminar();
		header('Location: ../Vista/Vista_Comentarios.php');
	}

function eliminar(){
		$cod=$_POST["codc"];
	require_once("../Modelo/Modelo_Comentarios.php");
	$mostrar= new MetodoComentarios();
	$resultado=$mostrar->EliminarComentarios($cod);

	return $resultado;
}
?>
