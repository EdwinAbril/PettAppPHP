 <link rel="stylesheet" href="../Vista/Estilos.css">
<?php
if (isset($_POST['consulta'])){
	$resulta=insertar();
	require_once("../Vista/Vista_Insertar.php");	
}

function insertar(){
	$nm=$_POST['nombre'];
	$tip=$_POST['tipo'];
	$ed=$_POST['edad'];
	$raz=$_POST['raza'];
	$nombre=$_FILES['imagen']['name'];
    $tipo=$_FILES['imagen']['type'];
    $tamaño=$_FILES['imagen']['size'];
    $tam=$_POST['tamaño'];
	$gen=$_POST['genero'];
	$col=$_POST['color'];
	$ced=$_POST['cedula'];
	
	if ($nombre!=null && $tamaño<=1000000) {
        $hoy=date("d_m_y");
        $nombre=$hoy.$nombre;
        $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/PettAppPHP/PetApp/Uploads/Mascotas_fotos/';

        move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$nombre);
    }
	require_once("../Modelo/Modelo_Mascotas.php");
	$mostrar=new MetodoMascotas();
	$resulta=$mostrar->InsertarMascotas($nm,$tip,$ed,$raz,$nombre,$tam,$gen,$col,$ced);

	return $resulta;
}

?>