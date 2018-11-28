<link rel="stylesheet" type="text/css" href="../Vista/Estilomod.css">

<?php
	  
	if (isset($_POST['botonfunci']))
	{
		$result=modificar();
		require_once("../Vista/Modificar_Ciudadano.php");
	}

function modificar(){
		$cod=$_POST["usu"];
		$nom=$_POST['nom'];
		$tel=$_POST['tel'];
		$dir=$_POST['dir'];
		$cor=$_POST['cor'];
	require_once("../Modelo/Modelo_Ciudadano.php");
	$mostrar= new MetodoCiudadano();
	$resultado=$mostrar->ModificarCiudadano($cod,$nom,$tel,$dir,$cor);

	return $resultado;
}
?>