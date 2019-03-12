<link rel="stylesheet" type="text/css" href="../Vista/Estilomod.css">
<?php
	  
	if (isset($_POST['botonfunci']))
	{
		$result=modificar();
		require_once("../Vista/Modificar_Usuario3.php");
	
	}

function modificar(){
	require_once("../Modelo/Modelo_Usuario.php");
	$mostrar= new MetodoUsuario();
		$cod=$_POST["usu"];
		$tel=$_POST['clave'];
		$nombre=$_FILES['fo']['name'];
	    $tipo=$_FILES['fo']['type'];
	    $tamaño=$_FILES['fo']['size'];
	    $imagensi=$_POST['fotosi'];
	$resultado=$mostrar->ModificarUsuario($cod,$tel,$nombre);

	if ($nombre!=null && $tamaño<=1000000) {
        $nombre=$cod;
        $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/PettAppPHP/PetApp/Uploads/Usuarios_Fotos/';
        move_uploaded_file($_FILES['fo']['tmp_name'],$carpeta_destino.$nombre);
	    $resultado=$mostrar->ModificarUsuario($cod,$tel,$nombre);
	}

	else {
	    $nombre=$imagensi;
	    $resultado=$mostrar->ModificarUsuario($cod,$tel,$nombre);
	    $resultado=$resultado;
  	}
	return $resultado;
}
?>