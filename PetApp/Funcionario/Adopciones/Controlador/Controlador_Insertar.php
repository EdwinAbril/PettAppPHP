 <link rel="stylesheet" href="../Vista/Estilos.css">
<?php
if (isset($_POST['aceptar'])){
	$result=insertar();
	require_once("../Vista/Vista_Insertar.php");	
}

function insertar(){
	$coda=$_POST['animal'];
	$ced=$_POST['cedu'];
	$men=$_POST['respuesta'];
	require_once("../Modelo/Modelo_Adopciones.php");
	$mostrar=new MetodoAdopciones();
	$result=$mostrar->InsertarAdopciones($coda,$men);
	$result=$mostrar->EliminarAnimal($coda);



	return $result;
}
?>