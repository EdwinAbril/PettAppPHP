
    <link rel="stylesheet" href="../Vista/Estilos.css">
<?php
if (isset($_POST['consulta'])){
	$resulta=insertar();
	require_once("../Vista/Vista_Insertar.php");	
}

function insertar(){
	$na=$_POST['nombre'];
	$ta=$_POST['tipo'];
	$ea=$_POST['edad'];
	$ra=$_POST['raza'];
	$nombre=$_FILES['imagen']['name'];
    $tipo=$_FILES['imagen']['type'];
    $tamaño=$_FILES['imagen']['size'];
    $tam=$_POST['tamaño'];
    $gen=$_POST['genero'];
    $col=$_POST['color'];
	if ($nombre!=null && $tamaño<=1000000) {
        $hoy=date("d_m_y");
        $nombre=$hoy.$nombre;

        $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/PettAppPHP/PetApp/Animales_fotos/';

        $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/PettAppPHP/PetApp/Animales_fotos/';

        move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$nombre);
    }
	require_once("../Modelo/Modelo_Animal.php");
	$mostrar=new MetodoAnimal();
	$resulta=$mostrar->InsertarAnimal($na,$ta,$ea,$ra,$nombre,$tam,$gen,$col);
	$resulta=$mostrar->InsertarAdoptado($na,$ta,$ea,$ra,$nombre,$tam,$gen,$col);

	return $resulta;
}

?>