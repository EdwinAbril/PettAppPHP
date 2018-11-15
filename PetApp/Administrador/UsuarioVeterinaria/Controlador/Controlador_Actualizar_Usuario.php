<link rel="stylesheet" type="text/css" href="../Vista/Estilomod.css">
<?php
	  
	if (isset($_POST['botonfunci']))
	{
		$result=modificar();
		require_once("../Vista/Modificar_Usuario.php");
	
	}

function modificar(){
		$cod=$_POST["usu"];
		$tel=$_POST['clave'];
	require_once("../Modelo/Modelo_Veterinaria.php");
	$mostrar= new MetodoVeterinarias();
	$resultado=$mostrar->ModificarUsuario($cod,$tel);

	return $resultado;
}
?>