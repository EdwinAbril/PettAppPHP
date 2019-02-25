<link rel="stylesheet" href="../Vista/CSS/Estilos.css">
<link rel="stylesheet" href="../Vista/JS/jquery-3.3.1.min.js"">
<link rel="stylesheet" href="../Vista/JS/main.js">
<?php
	  
	if (isset($_POST['eliminar']))
	{
		$resulta=eliminar();
		header('Location: ../Vista/Vista_Animal.php');
	}

function eliminar(){
		$cod=$_POST["cdani"];
	require_once("../Modelo/Modelo_Animal.php");
	$mostrar= new MetodoAnimal();
	$resultado=$mostrar->EliminarAnimal($cod);
	$resultado=$mostrar->EliminarAdoptado($cod);

	return $resultado;
}
?>
