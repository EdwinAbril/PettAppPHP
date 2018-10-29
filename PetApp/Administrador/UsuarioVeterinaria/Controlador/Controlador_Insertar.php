 <link rel="stylesheet" href="../Vista/Estilos.css">
<?php
if (isset($_POST['consulta'])){
	$result=insertar();
	require_once("../Vista/Vista_Insertar_Veterinaria.php");	
}
function insertar(){
	$us=$_POST['nombre'];
	$cla=$_POST['clave'];
	require_once("../Modelo/Modelo_Veterinaria.php");
	$mostrar=new MetodoVeterinarias();
	$result=$mostrar->InsertarUsuarioVeterinaria($us,$cla);
	return $result;
}
?>