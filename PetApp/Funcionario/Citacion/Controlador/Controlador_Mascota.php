<link rel="stylesheet" href="../Vista/Estilos.css">
<?php
if (isset($_POST['consulta'])) {
	$result=InsertarAnimal();
	require_once("../../../Ciudadano/Postulacion/Vista/Vista_Insertar.php");
}
function InsertarAnimal(){
	$mostrar=new Metodo();
	$names=$_POST[''];
	$tipo=$_POST[''];
	$edad=$_POST[''];
	$raza=$_POST[''];
	$nombre=$_FILES['imagen']['name'];
	$tipo=$_FILES['imagen']['type'];
	$tamaño=$_FILES['imagen']['type'];
	$tam=$_POST[''];
	$gen=$_POST[''];
	$col=$_POST[''];
	if ($nombre!=null && $tamaño<=1000000) {
		$hoy=date("d_m_y");
		$nombre=$names.$raza.$edad;
		$carpeta_destino=$_SERVER['DOCUMENT ROOT'].'/PettAppPHP/PetApp/Uploads/Mascotas_Fotos/';
		move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$nombre);
		$resulta=$mostrar->InsertarMascota($names,$tipo,$edad,$raza,$nombre,$tam,$gen,$col);
	}
	else{
		$nombre="animal_defecto.jpg";
		$resulta=$mostrar->InsertarMascota($names,$tipo,$edad,$raza,$nombre,$tam,$gen,$col);
	}
	return $resulta;

}



?>