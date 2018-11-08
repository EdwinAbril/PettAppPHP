<link rel="stylesheet" href="../Vista/CSS/Estilos.css">
<link rel="stylesheet" href="../Vista/JS/jquery-3.3.1.min.js"">
<link rel="stylesheet" href="../Vista/JS/main.js">
<?php
	  
	if (isset($_POST['eliminar']))
	{
		$resulta=eliminar();
		require_once("../Vista/Vista_Veterinaria.php");
		header('Location:../Vista/Vista_Veterinaria.php');
	}
	
function eliminar(){
		$cod=$_POST["cdvet"];
	require_once("../Modelo/Modelo_Veterinaria.php");
	$mostrar= new MetodoVeterinaria(); 
	$resultado=$mostrar->EliminarVeterinaria($cod);

	return $resultado;
}
?>
