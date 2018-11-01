<?php
	  
	if (isset($_POST['eliminar']))
	{
		$resulta=eliminar();
		require_once("../Vista/Vista_Veterinaria.php");
	}
	
function eliminar(){
		$cod=$_POST["cdvet"];
	require_once("../Modelo/Modelo_Veterinaria.php");
	$mostrar= new MetodoVeterinaria(); 
	$resultado=$mostrar->EliminarVeterinaria($cod);

	return $resultado;
}
?>
