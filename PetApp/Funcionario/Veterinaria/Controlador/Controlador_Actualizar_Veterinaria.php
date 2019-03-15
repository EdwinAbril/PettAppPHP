<link rel="stylesheet" type="text/css" href="../Vista/Estilomod.css">
<?php
	  
	if (isset($_POST['botonfunci']))
	{
		$result=modificar();
	
		require_once("../Vista/Modificar_Veterinaria.php");
	}

function modificar(){
		$cod=$_POST["usu"];
		$tel=$_POST['tel'];
		$nom=$_POST['nom'];
		$dir=$_POST['dir'];
	require_once("../Modelo/Modelo_Veterinaria.php");
	$mostrar= new MetodoVeterinaria();
	$resultado=$mostrar->ModificarVeterinaria($cod,$tel,$nom,$dir);

	return $resultado;
}
?>