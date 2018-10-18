<?php
if (isset($_POST['consultar'])) {
require_once("../Modelo/Modelo_Veterinaria.php");
$mostrar= new MetodoVeterinaria();
$resultado=$mostrar->MostrarVeterinaria();
require_once("../Vista/Vista_Veterinaria.php");
}

if (isset($_POST['consulta'])) {
	$nit=$_POST['nit'];
	$tel=$_POST['telefono'];
	$nom=$_POST['nombre'];
	$dir=$_POST['direccion'];
	$cla=$_POST['clave'];
require_once("../Modelo/Modelo_Veterinaria.php");
$mostrar=new MetodoVeterinaria();
	$result=$mostrar->Insertarveterinaria($nit,$tel,$nom,$dir,$cla);

require_once("../Vista/Vista_Insertar.php");
}
?>