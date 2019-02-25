 <link rel="stylesheet" href="../Vista/Estilos.css">
<?php
if (isset($_POST['consulta'])){
	$result=insertar();
	require_once("../Vista/Vista_Insertar.php");	
}

function insertar(){
	$use=$_POST['user'];
	$con=$_POST['con'];
	$ced=$_POST['cedula'];
	$tel=$_POST['telefono'];
	$nom=$_POST['nombre'];
	$cor=$_POST['correo'];
	$car=$_POST['cargo'];
	$dep=$_POST['depen'];
	$nombre=$_FILES['fo']['name'];
	$tipo=$_FILES['fo']['type'];
	$tamaño=$_FILES['fo']['size'];
	if ($nombre!=null && $tamaño<=1000000) {
        $nombre=$us;
        $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/PettAppPHP/PetApp/Uploads/Usuarios_Fotos/';
        move_uploaded_file($_FILES['fo']['tmp_name'],$carpeta_destino.$nombre);
        
    }

	require_once("../Modelo/Modelo_Funcionario.php");
	$mostrar=new MetodoFuncionario();
	$result=$mostrar->InsertarDatos($use,$con,$nombre);
	$result=$mostrar->InsertarFuncionario($ced,$tel,$nom,$cor,$car,$dep);
	
	return $result;
}
?>