 <link rel="stylesheet" type="text/css" href="../Vista/Estilomod.css">
<?php
	  
	if (isset($_POST['botonfunci']))
	{
		$result=modificar();
		require_once("../Vista/Modificar_Denuncias.php");
	}

function modificar(){
		$cod=$_POST["usu"];
		$fec=$_POST['fec'];
		$des=$_POST['des'];
		$ced=$_POST['ced'];
	require_once("../Modelo/Modelo_Denuncias.php");
	$mostrar= new MetodoDenuncias();
	$resultado=$mostrar->ModificarDenuncias($cod,$fec,$des,$ced);

	return $resultado;
}
?>