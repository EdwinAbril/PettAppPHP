 <link rel="stylesheet" href="../Vista/Estilos.css">
<?php
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