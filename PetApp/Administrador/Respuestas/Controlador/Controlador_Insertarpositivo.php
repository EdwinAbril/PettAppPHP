 <link rel="stylesheet" href="../Vista/Estilos.css">
<?php
if (isset($_POST['aceptar2'])){
	$result=Insertar();
	header('Location:../../Adopciones/Vista/Vista_Adopciones.php');	
}

function Insertar(){
	$ced=$_POST['cedula'];
	$men=$_POST['mensanxh'];
	$ani=$_POST['animal'];

	require_once("../Modelo/Modelo_Seguimiento.php");
	$mostrar=new MetodoSeguimiento();
	$result=$mostrar->InsertarPositivo($ced,$men);
	$result=$mostrar->InsertarAdopciones($ani,$ced,$men);
	$result=$mostrar->EliminarAnimal($ani);

	return $result;
}
?>