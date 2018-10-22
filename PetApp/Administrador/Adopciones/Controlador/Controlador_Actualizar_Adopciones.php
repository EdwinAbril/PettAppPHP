<?php
		$cod=$_GET["envidat"];
		$tel=$_POST['animal'];
		$nom=$_POST['seguimiento'];
	require_once("../Modelo/Modelo_Adopciones.php");
	$mostrar= new MetodoAdopciones();
	$resultado=$mostrar->ModificarAdopcion($cod,$tel,$nom);
	require_once("../Vista/Modificar_Adopciones.php");


?>