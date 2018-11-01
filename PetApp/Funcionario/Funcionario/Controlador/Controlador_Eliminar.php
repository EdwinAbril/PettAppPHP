<link rel="stylesheet" href="../Vista/Estilos.css">
<?php
	  
	if (isset($_POST['eliminar']))
	{
		$resulta=eliminar();
		require_once("../Vista/Vista_Funcionario.php");
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
