 <link rel="stylesheet" href="../Vista/Estilos.css">

<?php
if (isset($_POST['consulta'])){
	$result=insertar();
	require_once("../Vista/Vista_insertar.php");	
}

function insertar(){
	$us=$_POST['nombre'];
	$cla=$_POST['clave'];
	require_once("../Modelo/Modelo_Administrador.php");
	$mostrar=new MetodoAdministrador();
	$result=$mostrar->InsertarUsuario($us,$cla);

	return $result;
}
?>