 <link rel="stylesheet" href="../Vista/Estilos.css">
<?php
if (isset($_POST['consulta'])){
	$result=insertar();
	require_once("../Vista/Vista_insertar.php");	
}

function insertar(){
	$fec=$_POST['fecha'];
	$lug=$_POST['lugar'];
	$dur=$_POST['duracion'];
	$des=$_POST['desc'];
	require_once("../Modelo/Modelo_Eventos.php");
	$mostrar=new MetodoEventos();
	$result=$mostrar->InsertarEvento($fec,$lug,$dur,$des);

	return $result;
}
?>