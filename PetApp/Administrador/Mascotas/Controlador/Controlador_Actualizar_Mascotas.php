<link rel="stylesheet" type="text/css" href="../Vista/Estilomod.css">
<?php
	  
	if (isset($_POST['botonfunci']))
	{
		$result=modificar();
		require_once("../Vista/Modificar_Mascotas.php");
	}

function modificar(){
	require_once("../Modelo/Modelo_Mascotas.php");
	$mostrar= new MetodoMascotas();
		$cod=$_POST["usu"];
		$nm=$_POST['nombre'];
		$tip=$_POST['tipo'];
		$ed=$_POST['edad'];
		$raz=$_POST['raza'];
		$nombre=$_FILES['fos']['name'];
    	$tipo=$_FILES['fos']['type'];
    	$tamaño=$_FILES['fos']['size'];
		$tam=$_POST['tamaño'];
		$gen=$_POST['genero'];
		$col=$_POST['color'];
		$ced=$_POST['cedula'];
		$imagensi=$_POST['fotosi'];
	$resultado=$mostrar->ModificarMascotas($cod,$nm,$tip,$ed,$raz,$nombre,$tam,$gen,$col,$ced);

	if($nombre!=null & $tamaño<=1000000){ 

    $hoy=date("d_m_y");  
    $nombre=$hoy.$nm;
    $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/PettAppPHP/PetApp/Uploads/Mascotas_fotos/';
    move_uploaded_file($_FILES['fos']['tmp_name'],$carpeta_destino.$nombre);
    
    $resultado=$mostrar->ModificarMascotas($cod,$nm,$tip,$ed,$raz,$nombre,$tam,$gen,$col,$ced);
	}
    else {
    $mensaje1=" No adjunto imagen o el tamaño no corresponde";
    $nombre=$imagensi;
    $resultado=$mostrar->ModificarMascotas($cod,$nm,$tip,$ed,$raz,$nombre,$tam,$gen,$col,$ced);
    $resultado=$resultado.$mensaje1;

  	}

	return $resultado;
}
?>