<?php
if (isset($_POST['consultar'])) {
require_once("../Modelo/Modelo_Ciudadano.php");
$mostrar= new MetodoCiudadano();
$resultado=$mostrar->MostrarCiudadano();
require_once("../Vista/Vista_Ciudadano.php");
}



if (isset($_POST['consulta'])) {

	$ced=$_POST['cedula'];
	$nom=$_POST['nombre'];
	$tel=$_POST['telefono'];
	$dir=$_POST['direccion'];
	$cor=$_POST['correo'];
require_once("../Modelo/Modelo_Ciudadano.php");
$mostrar=new MetodoCiudadano();
require_once("../Vista/Vista_Insertar.php");
}
?>