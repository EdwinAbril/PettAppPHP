 <link rel="stylesheet" href="../Vista/Estilos.css">
<?php
if (isset($_POST['consulta'])){
	$result=insertar();
	require_once("../Vista/Vista_Insertar.php");	
}

function insertar(){
	$nom=$_POST['nombre'];
	$cla=$_POST['clave'];
	require_once("../Modelo/Modelo_Usuario.php");
	$mostrar=new MetodoUsuario();
	$result=$mostrar->InsertarUsuario($nom,$cla);
	return $result;
}
?>