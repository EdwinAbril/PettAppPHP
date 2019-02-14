<?php

require_once ("../../../Conexion.php");

class MetodoCiudadano{

	public function MostrarCiudadano($usu){
	$conectar= new conectarproyecto();
	$conexion= $conectar->conexion();
	$sql="select * from ciudadano where usuario_ciu='$usu'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}
}

?>