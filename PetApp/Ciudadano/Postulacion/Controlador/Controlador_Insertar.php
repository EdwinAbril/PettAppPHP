 <link rel="stylesheet" href="../Vista/Estilos.css">
<?php
if (isset($_POST['consulta'])){
	$result=insertar();
	require_once("../Vista/Vista_Insertar.php");	
}

function insertar(){
	$tel=$_POST['telefono'];
	$dir=$_POST['direccion'];
	$fij=$_POST['fijo'];
	$nombre=$_FILES['certificado']['name'];
    $tipo=$_FILES['certificado']['type'];
    $tamaño=$_FILES['certificado']['size'];
    $ce=$_POST['cedula'];
    $ca=$_POST['codi'];
	if ($nombre!=null && $tamaño<=1000000) {
        $hoy=date("d_m_y");
        $nombre=$hoy.$nombre;
        $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/PettAppPHP/PetApp/Administrador/Certficados/';
        move_uploaded_file($_FILES['certificado']['tmp_name'],$carpeta_destino.$nombre);
    }
	require_once("../Modelo/Modelo_Postulacion.php");
	$mostrar=new MetodoPostulacion();
	$result=$mostrar->InsertarPostulacion($tel,$dir,$fij,$nombre,$ce,$ca);

	return $result;
}

?>