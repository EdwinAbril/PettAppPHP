 <link rel="stylesheet" href="../Vista/Estilos.css">

<?php
if (isset($_POST['consulta'])){
	$result=insertar();
	require_once('../Vista/Registrarse.php');	
}

function insertar(){
	require_once("../Modelo/Modelo_Ciudadano.php");
	$mostrar=new MetodoCiudadano();
	$ced=$_POST['cedula'];
	$nom=$_POST['nombre'];
	$tel=$_POST['telefono'];
	$dir=$_POST['direccion'];
	$cor=$_POST['correo'];
	$us=$_POST['usuario'];
	$cl=$_POST['clave'];
	$co=$_POST['confirmar'];
	$nombre=$_FILES['imagen']['name'];
    $tipo=$_FILES['imagen']['type'];
    $tamaño=$_FILES['imagen']['size'];
	if ($cl == $co){
	if ($nombre!=null && $tamaño<=1000000) {
        $hoy=date("d_m_y");
        $nombre=$ced.$us;
        $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/PettAppPHP/PetApp/Uploads/Usuarios_Fotos/';
        move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$nombre);
        $resulta=$mostrar->InsertarUsuario($us,$cl,$nombre);
		$resulta=$mostrar->InsertarCiudadano($ced,$nom,$tel,$dir,$cor,$us);
    }
	else{
	$nombre="Usuario_Defecto.png";
	$resulta=$mostrar->InsertarUsuario($us,$cl,$nombre);
	$resulta=$mostrar->InsertarCiudadano($ced,$nom,$tel,$dir,$cor,$us);
    }
	}
	else{
		$resulta="Las contraseñas no coinciden";
	}
	
	return $resulta;
}
?>