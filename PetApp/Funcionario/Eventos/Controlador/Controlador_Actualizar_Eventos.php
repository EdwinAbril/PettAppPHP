<link rel="stylesheet" type="text/css" href="../Vista/Estilomod.css">
<?php
	  
	if (isset($_POST['botonfunci']))
	{
		$result=modificar();
		require_once("../Vista/Modificar_Eventos.php");
	}

function modificar(){
		$cod=$_POST["usu"];
		$fec=$_POST['fec'];
		$lug=$_POST['lug'];
		$dur=$_POST['dur'];
		$des=$_POST['des'];
	require_once("../Modelo/Modelo_Eventos.php");
	$mostrar= new MetodoEventos();
	$resultado=$mostrar->ModificarEventos($cod,$fec,$lug,$dur,$des);

	return $resultado;
}
?>