 <link rel="stylesheet" href="../Vista/Estilos.css">

<?php
if (isset($_POST['consulta'])){
	$result=insertar();
	require_once("../Vista/Vista_insertar.php");	
}

function insertar(){
	$ced=$_POST['cedula'];
	$nom=$_POST['nombre'];
	$tel=$_POST['telefono'];
	$dir=$_POST['direccion'];
	$cor=$_POST['correo'];
	$us=$_POST['usuario'];
	$cl=$_POST['clave'];
	require_once("../Modelo/Modelo_Ciudadano.php");
	$mostrar=new MetodoCiudadano();
	$result=$mostrar->InsertarUsuario($us,$cl);
	$result=$mostrar->InsertarCiudadano($ced,$nom,$tel,$dir,$cor,$us);
	

return $result;
}
?>