<link rel="stylesheet" type="text/css" href="../Vista/Estilomod.css">

<?php
	  
	if (isset($_POST['botonfunci']))
	{
		$result=modificar();
		require_once("../Vista/Modificar_Ciudadano.php");
	}

function modificar(){
	require_once("../Modelo/Modelo_Ciudadano.php");
	$mostrar= new MetodoCiudadano();
		$cod=$_POST["nom"];
		$nom=$_POST['nombre'];
		$tel=$_POST['tel'];
		$dir=$_POST['dir'];
		$cor=$_POST['cor'];

		$usu=$_POST["usu"];
		$cla=$_POST['cla'];
		$nombre=$_FILES['fos']['name'];
    	$tipo=$_FILES['fos']['type'];
    	$tamaño=$_FILES['fos']['size'];
		$imagensi=$_POST['fotosi'];

	$resultado=$mostrar->ModificarUsuario($usu,$cla,$nombre);
	$resultado=$mostrar->ModificarCiudadano($cod,$nom,$tel,$dir,$cor);

	if($nombre!=null & $tamaño<=1000000){ 

    $nombre=$cod.$usu;
    $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/PettAppPHP/PetApp/Uploads/Usuarios_Fotos/';
    move_uploaded_file($_FILES['fos']['tmp_name'],$carpeta_destino.$nombre);
    
    $resultado=$mostrar->ModificarUsuario($usu,$cla,$nombre);
	$resultado=$mostrar->ModificarCiudadano($cod,$nom,$tel,$dir,$cor);
	
	}
    
    else {
    $mensaje1=" No adjunto imagen o el tamaño no corresponde";
    $nombre=$imagensi;
    $resultado=$mostrar->ModificarUsuario($usu,$cla,$nombre);
	$resultado=$mostrar->ModificarCiudadano($cod,$nom,$tel,$dir,$cor);

  	}

	return $resultado;
}
?>