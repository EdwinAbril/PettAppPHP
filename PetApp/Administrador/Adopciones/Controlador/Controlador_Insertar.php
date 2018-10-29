<?php
if (isset($_POST['consulta'])){
	$result=insertar();
	require_once("../Vista/Vista_Insertar.php");	
}

function insertar(){
	$coda=$_POST['animal'];
	$cods=$_POST['seguimiento'];
	$men=$_POST['respuesta'];
	require_once("../Modelo/Modelo_Adopciones.php");
	$mostrar=new MetodoAdopciones();
	$result=$mostrar->InsertarAdopciones($coda,$cods,$men);

	return $result;
}
?>