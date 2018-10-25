<?php
	  
	if (isset($_POST['eliminar']))
	{
		$resulta=eliminar();
		require_once("../Vista/Vista_Animal.php");
	}

function eliminar(){
		$cod=$_POST["cdani"];
	require_once("../Modelo/Modelo_Animal.php");
	$mostrar= new MetodoAnimal();
	$resultado=$mostrar->EliminarAnimal($cod);

	return $resultado;
}
?>
