<?php
if (isset($_POST['consulta'])){
	$resulta=insertar();
	require_once("../Vista/Vista_Insertar.php");	
}

function insertar(){
	$tc=$_POST['telefono'];
	$dc=$_POST['direccion'];
	$tf=$_POST['fijo'];
	$nombre=$_FILES['certificado']['name'];
    $tipo=$_FILES['certificado']['type'];
    $tamaño=$_FILES['certificado']['size'];
    $ced=$_POST['cedula'];
    $cod=$_POST['codigo'];
	if ($nombre!=null && $tamaño<=1000000) {
        $hoy=date("d_m_y");
        $nombre=$hoy.$nombre;
        $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/PettAppPHP/PetApp/Administrador/Certficados/';
        move_uploaded_file($_FILES['certificado']['tmp_name'],$carpeta_destino.$nombre);
    }
	require_once("../Modelo/Modelo_Postulacion.php");
	$mostrar=new MetodoPostulacion();
	$resulta=$mostrar->InsertarPostulacion($tc,$dc,$tf,$nombre,$ced,$cod);

	return $resulta;
}

?>