 <link rel="stylesheet" href="../Vista/Estilos.css">
<?php
if (isset($_POST['aceptar2'])){
	$result=Insertar();
	header('Location:../../Adopciones/Vista/Vista_Adopciones.php');	
}

function Insertar(){
	$icon="adopcion.png";
	$ced=$_POST['cedulaadop'];
	$men=$_POST['mensadop'];
	$enc=$_POST['encar'];
	$ani=$_POST['animaladop'];
	$nom=$_POST['nombrefinal'];
	$tip=$_POST['tipofinal'];
	$eda=$_POST['edadfinal'];
	$raz=$_POST['razafinal'];
	$tam=$_POST['tamañofinal'];
	$gen=$_POST['generofinal'];
	$col=$_POST['colorfinal'];

	require_once("../Modelo/Modelo_Seguimiento.php");
	$mostrar=new MetodoSeguimiento();
	$result=$mostrar->InsertarPositivo($icon,$ced,$men,$enc);
	$result=$mostrar->InsertarAdopciones($ani,$ced,$men);
	$result=$mostrar->EliminarAnimal($ani);
	$result=$mostrar->InsertarMascotas($nom,$tip,$eda,$raz,$tam,$gen,$col,$ced);

	return $result;
}
?>