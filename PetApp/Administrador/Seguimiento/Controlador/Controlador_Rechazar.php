 <link rel="stylesheet" href="../Vista/Estilos.css"> 	
<?php
if (isset($_POST['rechazar2'])){
	$result=InsertarNegativo();
	header('Location:../Vista/Vista_Postulacion.php');
}

function InsertarNegativo(){
	$ced=$_POST['ced'];
	$mens=$_POST['mensarech'];


	require_once("../Modelo/Modelo_Postulacion.php");
	$mostrar=new MetodoSeguimiento();
	$result=$mostrar->InsertarNegativo($ced,$mens);

	return $result ;
}
?>