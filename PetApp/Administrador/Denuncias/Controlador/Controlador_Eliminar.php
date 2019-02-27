<link rel="stylesheet" href="../Vista/CSS/Estilos.css">
<link rel="stylesheet" href="../Vista/JS/jquery-3.3.1.min.js"">
<link rel="stylesheet" href="../Vista/JS/main.js">
<?php 
	  
	if (isset($_POST['eliminar']))
	{
		$result=eliminar();
		header('Location:../Vista/Vista_Denuncias.php');
	}

function eliminar(){
		$cod=$_POST['codi'];
		
	require_once("../Modelo/Modelo_Denuncias.php");
	$mostrar= new MetodoDenuncias();
	$result=$mostrar->EliminarDenuncias($cod);

	return $resulta;
}
?>
