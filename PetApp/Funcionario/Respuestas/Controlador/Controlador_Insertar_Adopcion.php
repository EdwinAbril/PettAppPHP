 <link rel="stylesheet" href="../Vista/Estilos.css">
<?php
if (isset($_POST['aceptar3'])){
	$result=InsertarPositivo();
	require_once("../Vista/Vista_RespuestaPositiva.php");	
}

function InsertarPositivo(){
	$ced=$_POST['cedula'];
	$men=$_POST['mensaje'];
	$an=$_POST['animal'];

	require_once("../Modelo/Modelo_Seguimiento.php");
	$mostrar=new MetodoSeguimiento();
	$result=$mostrar->InsertarPositivo($ced,$men);
	
	return $result ;
}

?>