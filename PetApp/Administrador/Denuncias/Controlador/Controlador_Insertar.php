<?php
if (isset($_POST['consulta'])){
	$resulta=insertar();
	require_once("../Vista/Vista_Insertar.php");	
}

function insertar(){
	$fec=$_POST['fecha'];
	$tip=$_POST['tipo'];
	$ced=$_POST['cedula'];
	$men=$_POST['denuncia'];
	$nombre=$_FILES['imagen']['name'];
    $tipo=$_FILES['imagen']['type'];
    $tamaño=$_FILES['imagen']['size'];
	if ($nombre!=null && $tamaño<=1000000) {
        $hoy=date("d_m_y");
        $nombre=$hoy.$nombre;
        $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/PettAppPHP/PetApp/Administrador/Evidencias_Denuncias/';
        move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$nombre);
    }
	require_once("../Modelo/Modelo_Denuncias.php");
	$mostrar=new MetodoDenuncias();
	$resulta=$mostrar->InsertarDenuncias($fec,$tip,$ced,$men,$nombre);

	return $resulta;
}

?>