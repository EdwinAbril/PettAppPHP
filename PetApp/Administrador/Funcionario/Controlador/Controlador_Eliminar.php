<link rel="stylesheet" href="../Vista/CSS/Estilos.css">
<link rel="stylesheet" href="../Vista/JS/jquery-3.3.1.min.js"">
<link rel="stylesheet" href="../Vista/JS/main.js">
<?php
	  
	if (isset($_POST['eliminar']))
	{
		$resulta=eliminar();
		header('Location:../Vista/Vista_Funcionario.php');
	}

function eliminar(){
		$cod=$_POST["codfu"];
	require_once("../Modelo/Modelo_Funcionario.php");
	$mostrar= new MetodoFuncionario();
	$resultado=$mostrar->EliminarFuncionario($cod);

	return $resultado;
}
?>
