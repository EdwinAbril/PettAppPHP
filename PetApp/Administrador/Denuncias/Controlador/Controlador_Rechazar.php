 <link rel="stylesheet" href="../Vista/Estilos.css">
<?php
if (isset($_POST['rechazarden'])){
	$result=Insertar();
	header('Location:../../Denuncias/Vista/Vista_Denuncias.php');	
}

function Insertar(){
	$ced=$_POST['cedurech'];
	$men=$_POST['mensajerech'];


	require_once("../Modelo/Modelo_Denuncias.php");
	$mostrar=new MetodoDenuncias();
	$result=$mostrar->InsertarPositivo($ced,$men);
	$result=$mostrar->EliminarDenuncias($ced);


	return $result;
}
?>