<link rel="stylesheet" type="text/css" href="../Vista/Estilomod.css">
<?php
	  
	if (isset($_POST['botonfunci']))
	{
		$result=modificar();
		require_once("../Vista/Modificar_Seguimiento.php");
	}

function modificar(){
		$cod=$_POST["usu"];
		$tel=$_POST['clave'];
	require_once("../Modelo/Modelo_Seguimiento.php");
	$mostrar= new MetodoSeguimiento();
	$resultado=$mostrar->ModificarSeguimiento($cod,$tel);

	return $resultado;
}
?>