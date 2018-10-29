<?php
if (isset($_POST['Entrar'])){
	$result=insertar();
	require_once("../Registrarse.php");	
}
function insertar(){
	$us=$_POST['Usuario'];
	$cla=$_POST['clave'];
	require_once("../Modelo/Modelo_Insertar.php");
	$mostrar=new MetodoUsCiudadano();
	$result=$mostrar->InsertarUsuarioCiudadano($us,$cla);
	return $result;
}
?>