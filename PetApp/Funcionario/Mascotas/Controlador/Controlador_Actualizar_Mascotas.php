<?php
	  
	if (isset($_POST['botonfunci']))
	{
		$result=modificar();
		require_once("../Vista/Modificar_Mascotas.php");
	}

function modificar(){
		$cod=$_POST["usu"];
		$nom=$_POST['nom'];
		$des=$_POST['des'];
		$est=$_POST['est'];
		$tip=$_POST['tip'];
		$eda=$_POST['eda'];
		$raz=$_POST['raz'];
		$ced=$_POST['ced'];
	require_once("../Modelo/Modelo_Mascotas.php");
	$mostrar= new MetodoMascotas();
	$resultado=$mostrar->ModificarMascotas($cod,$nom,$des,$est,$tip,$eda,$raz,$ced);

	return $resultado;
}
?>