 <link rel="stylesheet" href="../Vista/Estilos.css">
<?php
if (isset($_POST['aceptardenunci'])){
	$result=Insertar();
	header('Location:../../Denuncias/Vista/Vista_Denuncias.php');	
}

function Insertar(){
	$icon="denuncia.png";
	$ced=$_POST['ceduladenunci'];
	$men=$_POST['mensajedenun'];
	$enc=$_POST['encargado'];


	require_once("../Modelo/Modelo_Denuncias.php");
	$mostrar=new MetodoDenuncias();
	$result=$mostrar->InsertarPositivo($icon,$ced,$men,$enc);
	$result=$mostrar->EliminarDenuncias($ced);


	return $result;
}
?>