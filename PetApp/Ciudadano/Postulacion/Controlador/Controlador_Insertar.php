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
    $nombre1=$_FILES['cedulapdf']['name'];
    $tipo1=$_FILES['cedulapdf']['type'];
    $tamaño1=$_FILES['cedulapdf']['size'];
    $est=$_POST['estrato'];
    $resi=$_POST['residentes'];
    $ubic=$_POST['ubicacion'];
    $tiv=$_POST['vivienda'];
    $resp=$_POST['puntos'];
    $nombre2=$_FILES['recibo']['name'];
    $tipo2=$_FILES['recibo']['type'];
    $tamaño2=$_FILES['recibo']['size'];
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
    	$nombre1=$hoy.$nombre1;
        $carpeta_destino1=$_SERVER['DOCUMENT_ROOT'].'/PettAppPHP/PetApp/Uploads/Cedulapdf/';
        move_uploaded_file($_FILES['cedulapdf']['tmp_name'],$carpeta_destino1.$nombre1);
    }
    if($nombre2!=null && $tamaño2<=1000000){
        $hoy=date("d_m_y");
        $nombre2=$hoy.$nombre2;
        $carpeta_destino2=$_SERVER['DOCUMENT_ROOT'].'/PettAppPHP/PetApp/Administrador/Recibos/';
        move_uploaded_file($_FILES['recibo']['tmp_name'],$carpeta_destino2.$nombre2);
    } 
	require_once("../Modelo/Modelo_Postulacion.php");
	$mostrar=new MetodoPostulacion();
	$result=$mostrar->InsertarPostulacion($tel,$dir,$fij,$nombre,$nombre1,$est,$resi,$ubic,$tiv,$resp,$nombre2,$ce,$ca);

	return $result;
}

?>