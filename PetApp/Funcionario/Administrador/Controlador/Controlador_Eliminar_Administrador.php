<link rel="stylesheet" href="../Vista/Estilos.css">
<?php
	  
	if (isset($_POST['eliminar']))
	{
		$resulta=eliminar();
		require_once("../Vista/Vista_Administrador.php");
		header('Location: ../Vista/Vista_Administrador.php');
	}

function eliminar(){
		$cod=$_POST["usu"];
	require_once("../Modelo/Modelo_Administrador.php");
	$mostrar= new MetodoAdministrador();
	$resultado=$mostrar->EliminarAdministrador($cod);

	return $resultado;
}
?>
