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
	$cla=$_POST['clave'];
	$nombre=$_FILES['fo']['name'];
    $tipo=$_FILES['fo']['type'];
    $tamaño=$_FILES['fo']['size'];
	if ($nombre!=null && $tamaño<=1000000) {
        $nombre=$us;
        $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/PettAppPHP/PetApp/Uploads/Usuarios_Fotos/';
        move_uploaded_file($_FILES['fo']['tmp_name'],$carpeta_destino.$nombre);
        $resulta=$mostrar->InsertarUsuario($us,$cla,$nombre);
    }
	else{
	$nombre="Usuario_Defecto.jpg";
	$resulta=$mostrar->InsertarUsuario($us,$cla,$nombre);
	}
	return $resulta;
}
?>