 <link rel="stylesheet" type="text/css" href="../Vista/Estilomod.css">
<?php

	if (isset($_POST['botonfunci']))
	{
		$result=modificar();
		require_once("../Vista/Modificar_Adopciones.php");
	}

	function modificar(){
		$cod=$_POST["usu"];
		$tel=$_POST['animal'];
		$nom=$_POST['seguimiento'];
		$men=$_POST['mensaje'];
	require_once("../Modelo/Modelo_Adopciones.php");
	$mostrar= new MetodoAdopciones();
	$resultado=$mostrar->ModificarAdopcion($cod,$tel,$nom,$men);
	
	return $resultado;
	}

?>