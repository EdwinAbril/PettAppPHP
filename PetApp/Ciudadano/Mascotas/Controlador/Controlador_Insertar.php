 <link rel="stylesheet" href="../Vista/Estilos.css">
<?php
if (isset($_POST['consulta'])){
	$resulta=insertar();
	require_once("../Vista/Vista_Insertar.php");	
}

function insertar(){
	$nm=$_POST['nombre'];
	$des=$_POST['des'];
	$em=$_POST['estado'];
	$tm=$_POST['tipo'];
	$edm=$_POST['edad'];
	$rm=$_POST['raza'];
	$ced=$_POST['cedula'];
	$nombre=$_FILES['imagen']['name'];
    $tipo=$_FILES['imagen']['type'];
    $tamaño=$_FILES['imagen']['size'];
	if ($nombre!=null && $tamaño<=1000000) {
        $hoy=date("d_m_y");
        $nombre=$hoy.$nombre;
        $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/PettAppPHP/PetApp/Uploads</Mascotas_fotos/';
        move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$nombre);
    }
	require_once("../Modelo/Modelo_Mascotas.php");
	$mostrar=new MetodoMascotas();
	$resulta=$mostrar->InsertarMascotas($nm,$des,$em,$tm,$edm,$rm,$ced,$nombre);

	return $resulta;
}

?>