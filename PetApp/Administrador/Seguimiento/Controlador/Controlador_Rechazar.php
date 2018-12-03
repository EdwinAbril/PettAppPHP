 <link rel="stylesheet" href="../Vista/Estilos.css"> 	
<?php
if (isset($_POST['rechazar2'])){
	$result=InsertarNegativo();
	header('Location:../Vista/Vista_Seguimiento.php');
}

function InsertarNegativo(){
	$ced=$_POST['ced'];
	$mens=$_POST['mensarecha'];
	$pos=$_POST['pos'];


	require_once("../Modelo/Modelo_Seguimiento.php");
	$mostrar=new MetodoSeguimiento();
	$result=$mostrar->InsertarNegativo($ced,$mens);
	$result=$mostrar->EliminarPostulacion($pos);

	return $result ;
}
?>