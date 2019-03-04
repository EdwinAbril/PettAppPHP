 <link rel="stylesheet" href="../Vista/Estilos.css"> 	
<?php
if (isset($_POST['rechazar1'])){
	$result=InsertarNegativo();
	header('Location:../Vista/Vista_Postulacion.php');
}

function InsertarNegativo(){
	$ced=$_POST['ced'];
	$mens=$_POST['mensarech'];
	$post=$_POST['postu'];


	require_once("../Modelo/Modelo_Postulacion.php");
	$mostrar=new MetodoPostulacion();
	$result=$mostrar->InsertarNegativo($ced,$mens);
	$result=$mostrar->EliminarPostulacion($post);
	return $result ;
}
?>