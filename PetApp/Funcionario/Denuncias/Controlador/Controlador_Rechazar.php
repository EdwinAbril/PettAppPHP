 <link rel="stylesheet" href="../Vista/Estilos.css">
<?php
if (isset($_POST['rechazarden'])){
	$result=Insertar();
	header('Location:../../Denuncias/Vista/Vista_Denuncias.php');	
}

function Insertar(){
	$cod=$_POST['codi'];
	$ced=$_POST['cedurech'];
	$men=$_POST['mensajerech'];


	require_once("../Modelo/Modelo_Denuncias.php");
	$mostrar=new MetodoDenuncias();
	$result=$mostrar->EliminarDenuncias($cod);


	return $result;
}
?>