 <link rel="stylesheet" href="../Vista/Estilos.css">
<?php
if (isset($_POST['consulta'])){
	$result=insertar();
	require_once("../Vista/Vista_Insertar.php");	
}

function insertar(){
	$nit=$_POST['nit'];
	$tel=$_POST['telefono'];
	$nom=$_POST['nombre'];
	$dir=$_POST['direccion'];
	$nombre=$_FILES['fot']['name'];
	$tipo=$_FILES['fot']['type'];
	$tamaño=$_FILES['fot']['size'];
	if ($nombre!=null && $tamaño<=1000000) {
        $nombre=$nit;
        $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/PettAppPHP/PetApp/Uploads/Usuarios_Fotos/';
        move_uploaded_file($_FILES['fot']['tmp_name'],$carpeta_destino.$nombre);
        
    }

	require_once("../Modelo/Modelo_Veterinaria.php");
	$mostrar=new MetodoVeterinaria();
	$result=$mostrar->InsertarDatos($nit,$nit,$nombre);
	$result=$mostrar->Insertarveterinaria($nit,$tel,$nom,$dir);
	
	return $result;
}
?>
