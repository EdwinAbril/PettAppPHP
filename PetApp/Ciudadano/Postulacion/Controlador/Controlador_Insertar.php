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
    $nombre1=$_FILES['cedpdf']['name'];
    $tipo1=$_FILES['cedpdf']['type'];
    $tamaño1=$_FILES['cedpdf']['type'];
    $est=$_POST['estrato'];
    $resi=$_POST['residentes'];
    $ubic=$_POST['ubicacion'];
    $tiv=$_POST['vivienda'];
    $resp=$_POST['puntos'];
    $ce=$_POST['cedula'];
    $ca=$_POST['codi'];
	if ($nombre!=null && $tamaño<=1000000) {
        $hoy=date("d_m_y");
        $nombre=$hoy.$nombre;
        $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/PettAppPHP/PetApp/Administrador/Certficados/';
        move_uploaded_file($_FILES['certificado']['tmp_name'],$carpeta_destino.$nombre);
    }
    if ($nombre1!=null && $tamaño1<=1000000){
    	$hoy=date("d_m_y");
    	$nombre=$hoy.$nombre1;
        $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/PettAppPHP/PetApp/Administrador/Cedulas/';
        move_uploaded_file($_FILES['cedpdf']['tmp_name'],$carpeta_destino.$nombre1);
    }
	require_once("../Modelo/Modelo_Postulacion.php");
	$mostrar=new MetodoPostulacion();
	$result=$mostrar->InsertarPostulacion($tel,$dir,$fij,$nombre,$nombre1,$est,$resi,$ubic,$tiv,$resp,$ce,$ca);

	return $result;
}

?>