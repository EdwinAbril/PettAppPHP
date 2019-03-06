<link rel="stylesheet" type="text/css" href="../Vista/Estilomod.css">
<?php
	  
	if (isset($_POST['botonfunci']))
	{
		$result=modificar();
		require_once("../Vista/Modificar_Eventos.php");
	}

function modificar(){
	require_once("../Modelo/Modelo_Eventos.php");
	$mostrar= new MetodoEventos();
		$cod=$_POST["usu"];
		$fec=$_POST['fec'];
		$lug=$_POST['lug'];
		$dur=$_POST['dur'];
		$des=$_POST['des'];
		$nombre=$_FILES['fo']['name'];
	    $tipo=$_FILES['fo']['type'];
	    $tamaño=$_FILES['fo']['size'];
	    $imagensi=$_POST['fotosi'];
	$resultado=$mostrar->ModificarEventos($cod,$fec,$lug,$dur,$des,$nombre);

	if ($nombre!=null && $tamaño<=1000000) {
        $nombre=$cod;
        $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/PettAppPHP/PetApp/Uploads/Eventos_fotos/';
        move_uploaded_file($_FILES['fo']['tmp_name'],$carpeta_destino.$nombre);
		$resultado=$mostrar->ModificarEventos($cod,$fec,$lug,$dur,$des,$nombre);
	}

	else {
	    $nombre=$imagensi;
	    $resultado=$mostrar->ModificarEventos($cod,$fec,$lug,$dur,$des,$nombre);
	    $resultado=$resultado;
  	}
	return $resultado;
}
?>