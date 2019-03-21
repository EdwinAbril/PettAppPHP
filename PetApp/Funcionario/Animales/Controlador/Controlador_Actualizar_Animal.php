<link rel="stylesheet" type="text/css" href="../Vista/Estilomod.css">
<?php
	if (isset($_POST['botonfunci']))
	{
		$result=modificar();
		require_once("../Vista/Modificar_Animal.php");
	}

function modificar(){
	require_once("../Modelo/Modelo_Animal.php");
	$mostrar= new MetodoAnimal();
	    $cod=$_POST["usu"];
		$na=$_POST['nombre'];
		$ta=$_POST['tipo'];
		$ea=$_POST['edad'];
		$ra=$_POST['raza'];
		$nombre=$_FILES['fo']['name'];
	    $tipo=$_FILES['fo']['type'];
	    $tamaño=$_FILES['fo']['size'];
	    $tam=$_POST['tamaño'];
	    $gen=$_POST['genero'];
	    $col=$_POST['color'];
		$imagensi=$_POST['fotosi'];
		$resultado=$mostrar->ModificarAnimal($cod,$na,$ta,$ea,$ra,$nombre,$tam,$gen,$col);
		$resultado=$mostrar->ModificarAdoptado($cod,$na,$ta,$ea,$ra,$nombre,$tam,$gen,$col);

	if ($nombre!=null && $tamaño<=1000000) {
        $hoy=date("d_m_y");
        $nombre=$na.$ra.$ea;
        $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/PettAppPHP/PetApp/Uploads/Animales_fotos/';
        move_uploaded_file($_FILES['fo']['tmp_name'],$carpeta_destino.$nombre);
        $resultado=$mostrar->ModificarAnimal($cod,$na,$ta,$ea,$ra,$nombre,$tam,$gen,$col);
        $resultado=$mostrar->ModificarAdoptado($cod,$na,$ta,$ea,$ra,$nombre,$tam,$gen,$col);
    }

	else {
	    $mensaje1=" No adjunto imagen o el tamaño no corresponde";
	    $nombre=$imagensi;
	    $resultado=$mostrar->ModificarAnimal($cod,$na,$ta,$ea,$ra,$nombre,$tam,$gen,$col);
	    $resultado=$mostrar->ModificarAdoptado($cod,$na,$ta,$ea,$ra,$nombre,$tam,$gen,$col);
	    $resultado=$resultado.$mensaje1;
  	}

	return $resultado;
}


?>