 <link rel="stylesheet" href="../Vista/Estilos.css">

<?php
if (isset($_POST['consulta'])){
	$result=insertar();
	require_once("../Vista/Vista_insertar.php");	
}

function insertar(){
	require_once("../Modelo/Modelo_Administrador.php");
	$mostrar=new MetodoAdministrador();
	$us=$_POST['nombre'];
	$cl=$_POST['clave'];
	$co=$_POST['confirmar'];
	$nombre=$_FILES['fo']['name'];
    $tipo=$_FILES['fo']['type'];
    $tamaño=$_FILES['fo']['size'];
    if ($cl == $co){
	if ($nombre!=null && $tamaño<=1000000) {
        $nombre=$us;
        $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/PettAppPHP/PetApp/Uploads/Usuarios_Fotos/';
        move_uploaded_file($_FILES['fo']['tmp_name'],$carpeta_destino.$nombre);
        $resulta=$mostrar->InsertarUsuario($us,$cl,$nombre);
    }
	else{
	$nombre="Usuario_Defecto.png";
	$resulta=$mostrar->InsertarUsuario($us,$cl,$nombre);
	}
	}
	else{
		$resulta="Las contraseñas no coinciden";
	}
	return $resulta;
}
?>