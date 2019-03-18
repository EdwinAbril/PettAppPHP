<?php
	if (isset($_POST['Aceptar'])){
		$result=aceptar();
		header("Location:../Vista/Citaciones.php");
	}
	else if (isset($_POST['Denegar'])){
		$result=rechazar();
		header("Location:../Vista/Citaciones.php");
	}

	function aceptar(){
		require_once("../Modelo/Modelo_Citacion.php");
		$mostrar= new MetodoCitacion();
		$pos=$_POST["val"];
		$ace="bien.png";
		$resultado=$mostrar->AceptarCitacion($pos,$ace);
	}
	function rechazar(){
		require_once("../Modelo/Modelo_Citacion.php");
		$mostrar= new MetodoCitacion();
		$pos=$_POST["val"];
		$ace="mal.png";
		$resultado=$mostrar->RechazarCitacion($pos,$ace);
		$resultado=$mostrar->EliminarFecha($pos);
	}
?>