 <link rel="stylesheet" href="../Vista/Estilos.css">
<?php
if (isset($_POST['consulta'])){
	$result=insertar();
	require_once("../Vista/Vista_insertar.php");	
}

function insertar(){
	require_once("../Modelo/Modelo_Eventos.php");
	$mostrar=new MetodoEventos();
	
	$fec=$_POST['fecha'];
	$lug=$_POST['lugar'];
	$dur=$_POST['duracion'];
	$des=$_POST['desc'];
	$nombre=$_FILES['fot']['name'];
    $tipo=$_FILES['fot']['type'];
    $tamaño=$_FILES['fot']['size'];
	if ($nombre!=null && $tamaño<=1000000) {
        $nombre=$fec."_".$lug;
        $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/PettAppPHP/PetApp/Uploads/Eventos_fotos/';
        move_uploaded_file($_FILES['fot']['tmp_name'],$carpeta_destino.$nombre);
    	$result=$mostrar->InsertarEvento($fec,$lug,$dur,$des,$nombre);
    }
	else{
	$nombre="evento.jpg";
	$result=$mostrar->InsertarEvento($fec,$lug,$dur,$des,$nombre);
	}

	return $result;
}
?>